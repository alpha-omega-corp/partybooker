<?php


namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerMessage;
use App\Interfaces\IAdvertService;
use App\Interfaces\IPlanService;
use App\Models\Advert;
use App\Models\AdvertCategory;
use App\Models\Category;
use App\Models\CategoryLocale;
use App\Models\EventType;
use App\Models\FrequentlyAskedQuestion;
use App\Models\PartnerEventType;
use App\Models\PartnerPlanOption;
use App\Models\PartnersInfo;
use App\Models\ServiceImage;
use App\User;
use Exception;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use function json_encode;

class ProfileController extends Controller
{

    private IPlanService $planService;
    private IAdvertService $advertService;

    public function __construct(IPlanService $planService, IAdvertService $advertService)
    {
        $this->planService = $planService;
        $this->advertService = $advertService;
    }

    public function faq($id_partner)
    {
        if (Auth::user()->type == 'admin') {
            $id = $id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        $user = User::where('id_partner', $id)->with(['partnerInfo'])->first();
        $faqs = FrequentlyAskedQuestion::where('relation', 1)->get();

        return view('web.partner.pages.faq', ['user' => $user, 'faqs' => $faqs]);
    }

    public function terms()
    {
        $user = User::where('id_partner', Auth::user()->id_partner)->with(['partnerInfo'])->first();
        return view('web.partner.pages.terms', ['user' => $user]);
    }

    public function partnerContact(StorePartnerMessage $request)
    {
        $request->validated();
        $date = date('Y-m-d H:i:s');

        $user = $request->user();
        $name = $user->name;
        $email = $user->email;
        $message = $request->input('message');
        DB::insert('insert into messages (message_sent, contact_form, name, email, id_partner, message) value(?, ?, ?, ?, ?, ?)', [
            $date, 'partner', $name, $email, $user->id_partner, $message]);

        return redirect()->back()->with('success', "Message sent.");
    }

    public function plans($id_partner)
    {
        if (Auth::user()->type == 'admin') {
            $id = $id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        $user = User::where('id_partner', $id)->first();


        return view('web.partner.pages.plans', [
            'user' => $user,
            'plans' => $this->planService->getPlans(),
            'intent' => Auth::user()->createSetupIntent(),
        ]);
    }

    public function advert(string $id_partner): View
    {
        $user = User::where('id_partner', $id_partner)->first();
        $partnerInfo = PartnersInfo::where('id_partner', $id_partner)->first();
        $partnerPlanOptions = PartnerPlanOption::where('partners_info_id', $partnerInfo->id)->get();

        $select = AdvertCategory::where('id_partner', $partnerInfo->id_partner)->get();
        $hash = $select->pluck('category_id', 'sub_category_id')->toArray();
        $categoriesList = Category::whereNull('parent_id')->with(['subCategories', 'subCategories.lang'])->get();
        $currentCategories = Category::with(["subCategories" => function ($q) use ($hash) {
            $q->whereIn('id', array_keys($hash));
        }])->whereNull('parent_id')->whereIn('id', array_values($hash))->get();

        $adverts = Advert::where('partners_info_id', $id_partner)->with(['service'])->orderBy('status')->get();
        $tempImages['cat'] = [
            'count' => $partnerInfo->currentPlan->photos_num ?? 1,
            'images' => ServiceImage::where('id_partner', $user->id_partner)->orderBy('is_main', 'DESC')->get()
        ];

        $this->defineRateGroup($user);

        return view('web.partner.pages.advert', [
            'user' => User::where('id_partner', $id_partner)->first(),
            'planOptions' => $this->planService->getPlanOptions($partnerInfo->plans_id),
            'partnerPlanOptions' => $partnerPlanOptions,
            'categoriesList' => $categoriesList,
            'currentCategories' => $currentCategories,
            'categoryImages' => $tempImages,
            'adverts' => $adverts,
            'thumbnail' => ServiceImage::where('id_partner', $user->id_partner)
                ->where('is_main', true)->first(),
            'location' => [
                'lat' => $user->partnerInfo->lat,
                'lon' => $user->partnerInfo->lon,
                'address' => $user->partnerInfo->address
            ],
            'canPublishMatrix' => $this->advertService->canPublishMatrix($user->id_partner),
            'advertService' => $this->advertService,
        ]);
    }

    /**
     * @param User|Authenticatable|null $user
     * @return void
     */
    public function defineRateGroup(User|Authenticatable|null $user): void
    {
        if ($user->partnerInfo) {
            $grouped = $user->partnerInfo->rates->groupBy('rate');
            $groupCount = $grouped->map(function ($item, $key) {
                return collect($item)->count();
            })->sort();

            $user->partnerInfo->votes = $user->partnerInfo->rates->count();
            $user->partnerInfo->avarageRate = $user->partnerInfo->rates->avg('rate');
            $user->partnerInfo->rateGroup = $groupCount;
        }

    }

    public function editContacts(Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        $user = User::where('id_partner', $id)->with(['partnerInfo'])->first();

        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'unique:users,email,' . $user->id . '|email',
                'phone' => 'unique:partners_info,phone,' . $user->partnerInfo->id,
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            }

            User::where('id', $user->id)->update([
                'name' => $request->get('name'),
                'phone' => $request->get('phone'),
            ]);

            DB::commit();
            return redirect()->back()->with('success', "Contact info updated");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function editCompanyLocation(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'map' => 'required',
        ]);
        $map = $validated->getData()['map'];
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        $partner = PartnersInfo::where('id_partner', $id)->first();
        $partner->address = $map['address'];
        $partner->lat = $map['lat'];
        $partner->lon = $map['lon'];
        $partner->location_code = $map['state'];
        $partner->save();

        return redirect()->back()->with('success', "Location updated.");
    }

    public function editCompanyDescription(Request $request)
    {
        $partner = PartnersInfo::where('id_partner', $request->input('id_partner'))->first();

        $partner->en_slogan = strip_tags($request->input('en_slogan'));
        $partner->en_short_descr = $request->input('en_short_descr');
        $partner->en_full_descr = $request->input('en_full_descr');

        $partner->fr_slogan = strip_tags($request->input('fr_slogan'));
        $partner->fr_short_descr = $request->input('fr_short_descr');
        $partner->fr_full_descr = $request->input('fr_full_descr');

        $partner->en_seo_desc = strip_tags($request->input('en_seo_desc'));
        $partner->en_seo_title = $request->input('en_seo_title');
        $partner->en_seo_keywords = json_encode($request->input('en_seo_keywords'));

        $partner->fr_seo_desc = strip_tags($request->input('fr_seo_desc'));
        $partner->fr_seo_title = $request->input('fr_seo_title');
        $partner->fr_seo_keywords = json_encode($request->input('fr_seo_keywords'));


        $partner->save();
        return redirect()->back()->with('success', "Description updated.");
    }

    public function editCompany(Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        DB::beginTransaction();
        try {
            $partner = PartnersInfo::where('id_partner', $id)->first();
            if (!$partner) {
                throw new Exception("Partner not found");
            }

            $oldImageName = null;
            if ($request->file('logo')) {
                $oldImageName = $partner->logo;
                $logo = $partner->id . '-' . $request->file('logo')->getClientOriginalName();
                Storage::putFileAs('logos', $request->file('logo'), $logo);
                $partner->logo = $logo;
            }

            $partner->company_phone = $request->company_phone;
            $partner->fax = $request->company_fax;
            $partner->en_company_name = $request->company_name;
            $partner->fr_company_name = $request->company_name;

            //$partner->slug = str_replace([' ', '.', ',', '"', '--'], '-', strtolower($en_company_name));


            $partner->language = json_encode($request->input('languages'));
            if (!$partner->update()) {
                return redirect()->back()->with('error', "Cant update company profile.");
            }

            DB::commit();
            if (isset($oldImageName) && $oldImageName) {
                Storage::delete('logos/' . $oldImageName);
            }
            return redirect()->back()->with('success', "Company profile updated");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function editWww(Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        $partner = PartnersInfo::where('id_partner', $id)->first();

        $validator = Validator::make($request->all(), [
            'www' => 'nullable|unique:partners_info,www,' . $partner->id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        try {

            PartnersInfo::where('id', $partner->id)
                ->update([
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'linkedin' => $request->linkedin,
                    'youtube' => $request->youtube,
                    'vimeo' => $request->vimeo,
                    'www' => $request->www
                ]);
            return redirect()->back()->with(['success' => "Social data updated"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function editSeo(Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            return redirect()->back()->with(['error' => 'Only admin can update SEO']);
        }


        $partner = PartnersInfo::where('id_partner', $id)->first();

        //		$validator = Validator::make($request->all(), [
        //			'www' => 'nullable|unique:partners_info,www,' . $partner->id,
        //		]);
        //
        //		if ($validator->fails()) {
        //			return redirect()->back()->withErrors($validator->errors());
        //		}
        $en_seo_title = $request->input('en_seo_title', null);
        $fr_seo_title = $request->input('fr_seo_title', null);
        $en_seo_desc = $request->input('en_seo_desc', null);
        $fr_seo_desc = $request->input('fr_seo_desc', null);
        $en_seo_keywords = $request->input('en_seo_keywords', null);
        $fr_seo_keywords = $request->input('fr_seo_keywords', null);
        try {

            PartnersInfo::where('id', $partner->id)
                ->update([
                    'en_seo_title' => $en_seo_title,
                    'fr_seo_title' => $fr_seo_title,
                    'en_seo_desc' => $en_seo_desc,
                    'fr_seo_desc' => $fr_seo_desc,
                    'en_seo_keywords' => $en_seo_keywords,
                    'fr_seo_keywords' => $fr_seo_keywords
                ]);
            return redirect()->back()->with(['success' => "SEO data updated"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function editImagesAlt(Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            return redirect()->back()->with(['error' => 'Only admin can update images alts']);
        }


        //		$partner = PartnersInfo::where('id_partner', $id)->first();

        $alts = $request->input('image_alt') ?? [];

        //		$validator = Validator::make($request->all(), [
        //			'www' => 'nullable|unique:partners_info,www,' . $partner->id,
        //		]);
        //
        //		if ($validator->fails()) {
        //			return redirect()->back()->withErrors($validator->errors());
        //		}

        try {

            foreach ($alts as $key => $value) {
                ServiceImage::whereId($key)->update($value);
            }
            return redirect()->back()->with(['success' => "Alts data updated"]);
        } catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function getCategories(Request $request)
    {
        $sub = CategoryLocale::where('lang', app()->getLocale())->whereHas('category', function ($q) {
            $q->whereNotNull('parent_id');
        })->with(['category.parent', 'category.parent.lang'])->get();

        $list = [];
        foreach ($sub as $item) {
            $list[] = [
                'id' => $item->categories_id,
                'name' => $item->category->parent->lang->name . ": " . $item->name,
                'category' => $item->category->parent->lang->name
            ];
        }
        return $list;
    }

    public function setAdditionalCategories(Request $request)
    {
        $partner = PartnersInfo::find($request->get('partners_info_id'));
        if (!$partner) {
            return redirect()->back()->with('error', 'Partner not found');
        }

        DB::beginTransaction();
        try {
            AdvertCategory::where('partners_info_id', $partner->id)->delete();

            $newlist = Category::whereIn('id', $request->get('categories'))->with(['parent'])->get();
            $temp = [];
            foreach ($newlist as $item) {
                $temp[] = [
                    'partners_info_id' => $partner->id,
                    'id_partner' => $partner->id_partner,
                    'category_id' => $item->parent->id,
                    'sub_category_id' => $item->id
                ];
            }

            $categoriesForms = Category::whereIn('id', $request->get('categories'))->select('form_name')->distinct()->pluck('form_name')->toArray();

            Advert::where('partners_info_id', $partner->id)->update(['status' => Advert::STATUS_INACTIVE]);
            foreach ($categoriesForms as $form) {
                $advert = Advert::where('partners_info_id', $partner->id)->where('view_name', $form)->first();
                if ($advert) {
                    $advert->status = $advert->service_id ? Advert::STATUS_ACTIVE : Advert::STATUS_DRAFT;
                    $advert->save();
                } else {
                    $advert = new Advert();
                    $advert->partners_info_id = $partner->id;
                    $advert->category_id = 1;
                    $advert->status = Advert::STATUS_DRAFT;
                    $advert->view_name = $form;
                    $advert->save();
                }
            }

            AdvertCategory::insert($temp);

            PartnersInfo::where('id_partner', $partner->id_partner)->update(['public' => 0]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', "Changes saved.");
    }

    public function updateEventTypes(Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id = $request->id_partner;
        } else {
            $id = Auth::user()->id_partner;
        }

        $partner = PartnersInfo::where('id_partner', $id)->first();
        if (!$partner) {
            return redirect()->back()->with('error', 'Partner not found');
        }

        DB::beginTransaction();
        try {
            $eventTypes = EventType::whereIn('id', $request->get('event_type'))->get();
            if (!$eventTypes) {
                return redirect()->back()->with('success', "Changes saved.");
            }

            PartnerEventType::where('partners_info_id', $partner->id)->delete();
            $data = [];
            foreach ($eventTypes as $e) {
                $data[] = [
                    'partners_info_id' => $partner->id,
                    'event_type_id' => $e->id,
                ];
            }
            PartnerEventType::insert($data);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', "Changes saved.");
    }
}
