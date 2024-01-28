<?php

namespace App\Http\Controllers;

use App\Helpers\SlugSanitizer;
use App\Http\Requests\StoreTopServices;
use App\Models\Advert;
use App\Models\AdvertCategory;
use App\Models\DirectMessage;
use App\Models\Partner;
use App\Models\PartnerPlanOption;
use App\Models\PartnerVipPlan;
use App\Models\ServiceImage;
use App\Models\Services\BusinessService;
use App\Models\Services\CatererService;
use App\Models\Services\EntertainmentService;
use App\Models\Services\EquipmentService;
use App\Models\Services\WineService;
use App\Models\TopService;
use App\Models\User;
use Exception;
use Geocode;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{
    public function index()
    {
        $notifications = collect(DB::select('select * from notification'))->sortByDesc('id')->take(10);
        $messages = collect(DB::select('select * from messages'))->sortByDesc('id')->take(10);
        return view('admin.partybooker-cp', ['notifications' => $notifications, 'messages' => $messages]);
    }

    public function stripe(): View
    {
        $payedUsers = User::where('stripe_id', '!=', null)
            ->get()->map(fn($p) => $p->partnerInfo);
        return view('admin.stripe', [
            'payedUsers' => $payedUsers,
        ]);
    }

    public function topServices()
    {
        $partners = Partner::all()->map(function ($e) {
            return (object)[
                'value' => $e->id_partner,
                'label' => str_replace([' ', '.', ',', '"', '--', "'"], '', strtolower(trim($e->slug)))
            ];
        });

        return view('admin.top-services', [
            'partners' => $partners->toArray(),
            'topServices' => TopService::all(),
            'topServicesId' => TopService::all()->map(function ($e) {
                return $e->partner->id_partner;
            })->toArray()
        ]);
    }

    public function updateTopServices(StoreTopServices $request)
    {
        $validated = $request->validated();
        $topPartners = $validated['top'];
        $currentTop = TopService::all()->map(fn($e) => $e->partner->id_partner)->toArray();

        $newTop = array_diff($topPartners, $currentTop);
        $toDelete = array_diff($currentTop, $topPartners);
        foreach ($newTop as $partnerId) {
            $service = new TopService();
            $service->id_partner = Partner::where('id_partner', $partnerId)->first()->id;
            $service->save();
        }


        foreach (collect($toDelete)->flatten() as $partnerId) {
            $service = TopService::where('id_partner', Partner::where('id_partner', $partnerId)->first()->id)->first();
            $service->delete();
        }

        return redirect()->back()->with('success', 'Top services updated');
    }

    public function messages()
    {
        $messages = collect(DB::select('select * from messages'))->sortByDesc('id')->all();
        $directMessages = DirectMessage::with(['partner'])->get();
        return view('admin.messages', ['messages' => $messages, 'directMessages' => $directMessages]);
    }

    public function listing()
    {
        $data = DB::table('users')->where('type', 'partner')->get();
        $info = DB::table('partners_info')->get();
        $plans = DB::table('plans')->get();
        foreach ($info as $object) {
            foreach ($data as $dobject) {
                if ($object->id_partner == $dobject->id_partner) {
                    $object->name = $dobject->name;
                    $object->email = $dobject->email;
                    $object->created_at = $dobject->created_at;
                    break;
                }
            }
        }

        $partners = Partner::all();

        return view('admin.listing', [
            'info' => $info,
            'plans' => $plans,
            'planTabs' => ['Basic', 'Commission', 'Standard', 'Premium', 'Exclusive'],
            'basicPartners' => $partners->filter(fn($e) => strtolower($e->plan) == 'basic'),
            'commissionPartners' => $partners->filter(fn($e) => strtolower($e->plan) == 'commission'),
            'standardPartners' => $partners->filter(fn($e) => strtolower($e->plan) == 'standart'),
            'premiumPartners' => $partners->filter(fn($e) => strtolower($e->plan) == 'premium'),
            'exclusivePartners' => $partners->filter(fn($e) => strtolower($e->plan) == 'exclusif'),
        ]);
    }

    public function addPartner()
    {
        return view('admin.partner-register');
    }

    public function createPartner(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'unique:users',
            'phone' => 'unique:partners_info',
            'company_phone' => 'unique:partners_info',
            'www' => 'nullable|unique:partners_info,www'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        try {
            DB::beginTransaction();
            //user register
            $time = $_SERVER["REQUEST_TIME_FLOAT"];
            $pos = strpos($time, '.');
            $in = substr($time, $pos + 1);
            $id_partner = date('hisymd') . '-' . $in;
            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $password = Hash::make($request->input('password'));
            //$email_verification = 0;
            $email_verification = 1;
            $type = 'partner';
            $date = date('Y-m-d H:i:s');

            //general info
            $en_company_name = $request->input('en_company_name');
            $fr_company_name = $request->input('fr_company_name');
            $slug = str_replace([' ', '.', ',', '"', '--'], '-', strtolower($en_company_name));
            $location = $request->input('location');
            $address = $request->input('address');

            $map = $request->get('map');
            if ($map['lat'] && $map['lon']) {
                $lat = $map['lat'];
                $lon = $map['lon'];
            }

            // Geocode removed

            $company_phone = $request->input('company_phone');
            $company_fax = $request->input('company_fax');
            $en_slogan = $request->input('en_slogan');
            $fr_slogan = $request->input('fr_slogan');
            $en_short_descr = $request->input('en_short_descr');
            $fr_short_descr = $request->input('fr_short_descr');
            $en_full_descr = $request->input('en_full_descr');
            $fr_full_descr = $request->input('fr_full_descr');
            $languages = json_encode($request->input('languages'));
            $other = $request->input('other');

            if ($request->file('logo')) {
                $logo = $id_partner . '-' . $request->file('logo')->getClientOriginalName();
            } else {
                $logo = '';
            }

            //www
            $company_url = $request->input('company_url');
            $facebook = $request->input('facebook');
            $twitter = $request->input('twitter');
            $instagram = $request->input('instagram');
            $linkedin = $request->input('linkedin');
            $youtube = $request->input('youtube');
            $vimeo = $request->input('vimeo');
            $discount = $request->get('discount') ?? null;
            $en_seo_title = $request->input('en_seo_title');
            $fr_seo_title = $request->input('fr_seo_title');
            $en_seo_desc = $request->input('en_seo_desc');
            $fr_seo_desc = $request->input('fr_seo_desc');
            $en_seo_keywords = $request->input('en_seo_keywords');
            $fr_seo_keywords = $request->input('fr_seo_keywords');

            if (DB::table('users')->insert([
                'id_partner' => $id_partner,
                'name' => $name,
                'email' => $email,
                'email_verification' => $email_verification,
                'password' => $password,
                'created_at' => $date,
                'updated_at' => $date,
                'type' => $type
            ])) {


                $partner_info_data = [
                    'id_partner' => $id_partner,
                    'slug' => SlugSanitizer::sanitize($slug),
                    'en_company_name' => $en_company_name,
                    'fr_company_name' => $fr_company_name,
                    'location_code' => $location,
                    'address' => $address,
                    'lat' => $lat,
                    'lon' => $lon,
                    'phone' => $phone,
                    'company_phone' => $company_phone,
                    'fax' => $company_fax,
                    'logo' => $logo,
                    'en_slogan' => $en_slogan,
                    'en_short_descr' => $en_short_descr,
                    'en_full_descr' => $en_full_descr,
                    'fr_slogan' => $fr_slogan,
                    'fr_short_descr' => $fr_short_descr,
                    'fr_full_descr' => $fr_full_descr,
                    'language' => $languages,
                    'other_lang' => $other,
                    'www' => $company_url,
                    'facebook' => $facebook,
                    'twitter' => $twitter,
                    'instagram' => $instagram,
                    'linkedin' => $linkedin,
                    'youtube' => $youtube,
                    'vimeo' => $vimeo,
                    'discount' => $discount,
                    'priority' => 10,
                    'en_seo_title' => $en_seo_title,
                    'fr_seo_title' => $fr_seo_title,
                    'en_seo_desc' => $en_seo_desc,
                    'fr_seo_desc' => $fr_seo_desc,
                    'en_seo_keywords' => $en_seo_keywords,
                    'fr_seo_keywords' => $fr_seo_keywords,
                ];

                if ($request->get('is_commission')) {
                    $partner_info_data['is_commission'] = 1;
                    $partner_info_data['commission_amount'] = $request->get('commission_amount');
                    $partner_info_data['plan'] = 'commission';
                    $partner_info_data['plan_option'] = 0;
                    $partner_info_data['payment_status'] = 1;
                    $partner_info_data['payed'] = date("Y-m-d");
                    $partner_info_data['expiration_date'] = date("Y-m-d", strtotime(date('Y-m-d') . "+ 365 days"));
                }

                if (DB::table('partners_info')->insert($partner_info_data)) {

                    if ($request->file('logo')) {
                        $request->file('logo')->storeAs('logos', $logo);
                    }
                    //write event to DB for notifications "REGISTRATION"
                    $event = 'Service provider registration';
                    $description = 'New service provider:' . $name . ', ID:' . $id_partner;

                    DB::insert('insert into notification (event_date, event, description) value(?, ?, ?)', [$date, $event, $description]);

                    //send verification mail to user
                    $data = array(
                        'name' => $name,
                        'type' => $type,
                        'email' => $email,
                    );

                    //Mails::send('email.html', $data, function ($message) use ($data, $email) {
                    //	$message->from('partybooker@partybooker.ch', 'New registration');
                    //	$message->to($email)->subject('Email Varification');
                    //});
                    DB::table('statistics')->insert(['id_partner' => $id_partner]);
                } else {

                    throw new Exception("Can`t create new partner");
                }
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            var_dump(123);
            exit;
            //	        return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back();
    }

    public function setDiscount(Request $request)
    {

        try {
            $discount = (int)$request->get('discount');
            $partner = Partner::where('id', $request->get('partners_info_id'))->first();
            $partner->discount = $discount < 0 ? 0 : ($discount > 100 ? 100 : ($discount > 0 ? $discount : null));
            $partner->save();
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back();
    }

    public function blog()
    {
        $posts = DB::table('blog')->get();
        return view('admin.blog.manage', ['posts' => $posts]);
    }

    public function newpost()
    {
        return view('admin.new-post');
    }

    public function post(Request $request, $post_slug)
    {
        $post = DB::table('blog')->where('slug', $post_slug)->get();
        if (count($post) > 0) {
            return view('admin.post', ['post' => $post]);
        } else {
            return view('404');
        }
    }


    public function faq()
    {
        $faq = DB::select('select * from faq');
        return view('admin.faq', ['faq' => $faq]);
    }

    public function removePartner(Request $request)
    {
        $user = User::where('id_partner', $request->get('id_partner'))->first();
        $partner = Partner::where('id_partner', $user->id_partner)->first();
        if (!$user) {
            return response()->json(['partner not found'], 400);
        }

        $serviceImages = ServiceImage::where('partners_info_id', $partner->id)->get();
        $vipPlan = PartnerVipPlan::where('partners_info_id', $partner->id)->first();

        DB::beginTransaction();
        try {
            PartnerVipPlan::where('partners_info_id', $partner->id)->delete();
            ServiceImage::where('partners_info_id', $partner->id)->delete();
            CatererService::where('id_partner', $partner->id_partner)->delete();
            EquipmentService::where('id_partner', $partner->id_partner)->delete();
            EntertainmentService::where('id_partner', $partner->id_partner)->delete();
            BusinessService::where('id_partner', $partner->id_partner)->delete();
            WineService::where('id_partner', $partner->id_partner)->delete();
            AdvertCategory::where('partners_info_id', $partner->id)->delete();
            Advert::where('partners_info_id', $partner->id)->delete();
            PartnerPlanOption::where('partners_info_id', $partner->id)->delete();
            Partner::where('id_partner', $user->id_partner)->delete();
            User::where('id_partner', $user->id_partner)->delete();
            TopService::where('id_partner', $partner->id)->delete();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 400);
        }

        foreach ($serviceImages as $img) {
            Storage::delete('images/' . $img->image_name);
        }

        if ($vipPlan && $vipPlan->image) {
            Storage::delete('banners/' . $vipPlan->image);
        }

        return response()->json(['message' => 'Ok'], 200);
    }
}
