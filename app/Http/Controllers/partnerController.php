<?php

namespace App\Http\Controllers;

use App\Helpers\SlugSanitizer;
use App\Http\Middleware\LocaleMiddleware;
use App\Http\Requests\AdminChangePlanRequest;
use App\Models\Advert;
use App\Models\AdvertCategory;
use App\Models\Category;
use App\Models\PartnersInfo;
use App\Models\Plans;
use App\Services\IPaymentTransactionService;
use App\User;
use Auth;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;


class partnerController extends Controller
{
    private $_transactionService;

    public function __construct(IPaymentTransactionService $transactionService)
    {
        $this->_transactionService = $transactionService;
    }

    public function ChangePlanByAdmin(AdminChangePlanRequest $request)
    {

        $plan = Plans::where("id", $request->input('plan_id'))->first();

        $date = strtotime($request->input('start_date'));
        $plan_name = strtolower($plan->name);

        DB::beginTransaction();
        try {

            $this->_transactionService->SetPayment($request->start_date, $plan->id, $request->partner_id);
            $user = User::where("id_partner", $request->partner_id)->first();

            $data = [
                "plan_name" => $plan_name,
                "payed" => date("Y-m-d", $date),
                "expiration_date" => date("Y-m-d", strtotime($request->start_date . "+ 365 days"))
            ];

            if (env('APP_ENV') == 'production') {
                Mail::send('email.plans.changed', $data, function ($message) use ($user, $plan) {
                    $message->from(env("MAIL_USERNAME"), 'Plan activation');
                    $message->to($user->email)->subject("Plan {$plan->name}");
                });
            }
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }

        return redirect()->back()->with('success', "Partner plan data updated");

    }

    public function ChoseFreePlan(Request $request)
    {

        try {
            $plan = Plans::where("id", $request->input('plan_id'))->first();
            if (!$plan) {
                throw new Exception("Plan not found");
            }

            $user = User::where("id_partner", Auth::user()->id_partner)->first();
            if (!$user) {
                throw new Exception("User not found");
            }

            $date = strtotime(date('Y-m-d'));
            $plan_name = strtolower($plan->name);


            $this->_transactionService->SetPayment($request->start_date, $plan->id, Auth::user()->id_partner);
            $note = 'updated';

            $data = [
                "plan_name" => $plan_name,
                "payed" => date("Y-m-d", $date),
                "expiration_date" => date("Y-m-d", strtotime($request->start_date . "+ 365 days"))
            ];

            if (env('APP_ENV') == 'production') {
                Mail::send('email.plans.changed', $data, function ($message) use ($user, $plan) {
                    $message->from(env("MAIL_USERNAME"), 'Plan activation');
                    $message->to($user->email)->subject("Plan {$plan->name}");
                });
            }
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }

        return redirect()->back()->with('success', 'Plan changed.');
    }

    public function register(Request $request)
    {
        if (Auth::user()) {
            $validator = Validator::make($request->all(), [
                'email' => 'unique:partners_info',
                'phone' => 'unique:partners_info',
                'company_phone' => 'unique:partners_info',
                'www' => 'nullable|unique:partners_info,www',
                'map' => 'required'
            ]);


            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }


            DB::beginTransaction();
            try {

                //user register
                $time = $_SERVER["REQUEST_TIME_FLOAT"];
                $pos = strpos($time, '.');
                $in = substr($time, $pos + 1);
                $id_partner = date('hisymd') . '-' . $in;
                $name = $request->input('name');
                $date = date('Y-m-d H:i:s');


                $map = $request->get('map');
                $languages = json_encode($request->input('languages'));
                $companyName = $request->input('company_name');
                $companyPhone = $request->input('company_phone');
                $slug = str_replace([' ', '.', ',', '"', '--'], '-', strtolower($companyName));


                DB::table('partners_info')->insert([
                    'id_partner' => $id_partner,
                    'slug' => SlugSanitizer::sanitize($slug),
                    'en_company_name' => $companyName,
                    'fr_company_name' => $companyName,
                    'location_code' => $map['state'],
                    'address' => $map['address'],
                    'lat' => $map['lat'],
                    'lon' => $map['lon'],
                    'company_phone' => $companyPhone,
                    'phone' => $companyPhone,
                    'language' => $languages,
                    'priority' => 10,
                    'average_rate' => 0,
                    'plan' => 'basic',
                    'budget' => 1,
                    'payment_status' => false,
                    'public' => false,
                    'expiration_date' => null,
                    'price' => 1,
                ]);

                Auth::user()->update([
                    'id_partner' => $id_partner,
                    'type' => 'partner'
                ]);

                $event = 'Service provider registration';
                $description = 'New service provider:' . $name . ', ID:' . $id_partner;

                DB::insert('insert into notification (event_date, event, description) value(?, ?, ?)', [$date, $event, $description]);
                DB::table('statistics')->insert(['id_partner' => $id_partner]);

                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
                return redirect()->back()->with('error', $e->getMessage());
            }
            return redirect()->route('profile', Auth::user()->id_partner);

        }
        return redirect()->back();

    }

    public function editCategory(Request $request)
    {
        DB::beginTransaction();
        try {
            $id_partner = $request->id_partner;
            $partner = PartnersInfo::where('id_partner', $id_partner)->first();
            if (!$partner) {
                throw new Exception("Partner not found");
            }

            AdvertCategory::where('partners_info_id', $partner->id)->delete();

            $temp = [];
            $categories = [];
            foreach ($request->get('category') as $cat => $subs) {
                foreach ($subs as $sub) {
                    $categories[] = $sub;
                    $temp[] = [
                        'partners_info_id' => $partner->id,
                        'id_partner' => $id_partner,
                        'category_id' => $cat,
                        'sub_category_id' => $sub
                    ];
                }
            }

            $categoriesForms = Category::whereIn('id', $categories)->select('form_name')->distinct()->pluck('form_name')->toArray();

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

            PartnersInfo::where('id_partner', $id_partner)->update(['public' => 0]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', "Category successfully updated.");

    }

    public function editSchedule(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        if ($db == 'event_places' || $db == 'wine' || $db == 'equipment' || $db == 'entertainment') {
            $working_days = json_encode($request->working_days);
            $opening = $request->open ?? null;
            $closing = $request->close ?? null;
            $duration = $request->duration;
            $holidays = $request->holidays;
            $extansion = $request->extansion;
            $ext_true = $request->yes_extansion;
            $opening_upon = $request->opening_upon;

            echo $working_days;
            echo $opening;
            echo $closing;
            if ($db == 'equipment') {
                DB::table($db)->
                where('id_partner', $id_partner)->
                update(['working_days' => $working_days, 'opening' => $opening, 'closing' => $closing, 'holidays' => $holidays, 'extansion' => $extansion, 'ext_true' => $ext_true]);
            } elseif ($db == 'event_places') {

                $opening_days = $request->get('opening') ?? [];

                $temp = [];
                foreach ($opening_days as $time) {
                    if (!$time['open'] && !$time['close'] && !$time['description']) {
                        continue;
                    }
                    $temp[] = [
                        'open' => $time['open'],
                        'close' => $time['close'],
                        'description' => $time['description']
                    ];
                }

                $working_time = json_encode($temp);
                DB::table($db)->
                where('id_partner', $id_partner)->
                update(['working_days' => $working_days, 'opening' => $opening, 'closing' => $closing, 'holidays' => $holidays, 'extansion' => $extansion, 'ext_true' => $ext_true, 'working_time' => $working_time]);
            } elseif ($db == 'wine') {
                DB::table($db)->
                where('id_partner', $id_partner)->
                update(['working_days' => $working_days, 'opening' => $opening, 'closing' => $closing, 'holidays' => $holidays, 'extansion' => $extansion, 'ext_true' => $ext_true, 'opening_upon' => $opening_upon]);
            } else {
                DB::table($db)->
                where('id_partner', $id_partner)->
                update(['working_days' => $working_days, 'duration' => $duration, 'holidays' => $holidays, 'extansion' => $extansion, 'ext_true' => $ext_true]);
            }
        }

        if ($db == 'caterers') {
            $holidays = $request->holidays;
            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['holidays' => $holidays]);
        }
        $note = 'updated';
        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }

    public function editRates(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        $price = $request->price;
        $price_for = $request->price_for;
        $other_price = $request->other_price;
        $budget = $request->budget;
        $paymeny = $request->pay_methods ? json_encode($request->pay_methods) : json_encode([]);
        $other_payment = $request->otherpayment;
        $deposit = $request->deposit;

        echo $other_payment;
        DB::table('partners_info')->
        where('id_partner', $id_partner)->
        update(['price' => $price, 'budget' => $budget]);

        //if caterers
        if ($db == 'caterers') {
            $p_terms = $request->p_terms;
            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['price_for' => $price_for, 'paymeny' => $paymeny, 'other_payment' => $other_payment, 'deposit' => $deposit, 'p_terms' => $p_terms]);

        } elseif ($db == 'equipment') {
            $delivery = $request->delivery;
            $expences = $request->expences;
            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['price_for' => $price_for, 'other_price' => $other_price, 'paymeny' => $paymeny, 'other_payment' => $other_payment, 'deposit' => $deposit, 'delivery' => $delivery, 'expences' => $expences,]);

        } elseif ($db == 'entertainment') {
            $travelling_exp = $request->travelling;
            $additional_exp = $request->additional;
            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['price_for' => $price_for, 'other_price' => $other_price, 'paymeny' => $paymeny, 'other_payment' => $other_payment, 'deposit' => $deposit, 'travelling_exp' => $travelling_exp, 'additional_exp' => $additional_exp]);

        } else {
            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['price_for' => $price_for, 'other_price' => $other_price, 'paymeny' => $paymeny, 'other_payment' => $other_payment, 'deposit' => $deposit]);
        }
        $note = 'updated';

        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }

    public function editGeneral(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        if ($db == 'event_places') {
            $coctail = $request->cocktail_capacity;
            $banquet = $request->banquet_capacity;
            $outdoor = $request->outdor_capacity;
            $sitting = json_encode($request->sitting_schema);
            $rooms = $request->set_num;
            $room = [];
            for ($i = 1; $i <= $rooms; $i++) {
                $room_i = 'name:' . $request->input('room_name_' . $i) . ',capacity:' . $request->input('room_cap_' . $i);
                array_push($room, $room_i);
            }
            $room = json_encode($room);
            $reduced_mob = $request->reduced_mobility;
            $car = $request->car_park;
            $facilities = json_encode($request->facilities);
            $oth_facilities = $request->otherfacilities;
            $convenience = $request->conveniences ? json_encode($request->conveniences) : json_encode([]);
            $alcohole = $request->alcohol;
            $alcohole_yes = $request->yes_alcohol;

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['coctail' => $coctail, 'banquet' => $banquet, 'outdoor' => $outdoor, 'sitting' => $sitting, 'room' => $room, 'reduced_mob' => $reduced_mob, 'car' => $car, 'facilities' => $facilities, 'oth_facilities' => $oth_facilities, 'convenience' => $convenience, 'alcohole' => $alcohole, 'alcohole_yes' => $alcohole_yes]);
        }

        if ($db == 'caterers') {
            $geo = $request->geo;
            $min_guests = $request->min_guests;
            $max_guests = $request->max_guests;
            $smood = $request->smood;

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['geo' => $geo, 'min_guests' => $min_guests, 'max_guests' => $max_guests, 'smood' => $smood]);
        }

        if ($db == 'wine') {
            $services = $request->set_num_service;
            $service = [];
            for ($i = 1; $i <= $services; $i++) {
                $service_i = 'name: ' . $request->input('service_activity_name' . $i) . ', description: ' . $request->input('service_activity_description' . $i);
                array_push($service, $service_i);
            }
            $service = json_encode($service);

            $participants = $request->set_num_participant;
            $participant = [];
            for ($i = 1; $i <= $participants; $i++) {
                $participant_i = 'space name: ' . $request->input('space_name' . $i) . ', min: ' . $request->input('min_num' . $i) . ', max: ' . $request->input('max_num' . $i);
                array_push($participant, $participant_i);
            }
            $participant = json_encode($participant);

            $wines = $request->set_num_wine;
            $wine = [];
            for ($i = 1; $i <= $wines; $i++) {
                $wine_i = 'name: ' . $request->input('wine_name' . $i) . ', description: ' . $request->input('wine_description' . $i);
                array_push($wine, $wine_i);
            }
            $wine = json_encode($wine);

            $affiliations = $request->set_num_aff;
            $affiliation = [];
            for ($i = 1; $i <= $affiliations; $i++) {
                if (strlen($request->input('aff_name' . $i)) > 0) {
                    $affiliation_i = 'name: ' . $request->input('aff_name' . $i) . ', link: ' . $request->input('aff_link' . $i);
                    array_push($affiliation, $affiliation_i);
                }
            }
            $affiliation = json_encode($affiliation);

            $rewards = $request->set_num_reward;
            $reward = [];
            for ($i = 1; $i <= $rewards; $i++) {
                $reward_i = 'name: ' . $request->input('price_name' . $i) . ', contest: ' . $request->input('contest_name' . $i) . ', reward: ' . $request->input('reward' . $i);
                array_push($reward, $reward_i);
            }
            $reward = json_encode($reward);

            $article = $request->article;
            $art_d = null;
            $art_d_cur = $request->art_d_cur;
            if ($request->file('article_d')) {
                $art_d = $id_partner . '-' . $request->file('article_d')->getClientOriginalName();
                $request->file('article_d')->storeAs('articles', $art_d);
            } else {
                if (!is_null($art_d_cur)) {
                    $art_d = $art_d_cur;
                }
            }
            $art_l = $request->article_l;
            if (!is_null($art_l)) {
                $art_d = null;
            }

            $furniture = json_encode($request->furniture_eq);
            $other_furniture = $request->otherfurniture_eq;

            $equipment = json_encode($request->tech_eq);
            $other_equipment = $request->othertech_eq;

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['service' => $service, 'participant' => $participant, 'wine' => $wine, 'affiliation' => $affiliation, 'reward' => $reward, 'article' => $article, 'art_d' => $art_d, 'art_l' => $art_l, 'furniture' => $furniture, 'other_furniture' => $other_furniture, 'equipment' => $equipment, 'other_equipment' => $other_equipment]);
        }

        if ($db == 'equipment') {
            $geo = $request->geo;
            $complim_services = $request->complim_services;
            $proposed = $request->proposed;
            $references = $request->references;

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['geo' => $geo, 'complim_services' => $complim_services, 'proposed' => $proposed, 'references' => $references]);
        }

        if ($db == 'entertainment') {
            $geo = $request->geo;
            $services = $request->services;
            $participants = $request->participants;
            $equipment = $request->equipment;
            $eq_not_incl = $request->eq_not_incl;
            $biography = $request->biography;
            $reference = $request->references;
            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['geo' => $geo, 'services' => $services, 'participants' => $participants, 'equipment' => $equipment, 'eq_not_incl' => $eq_not_incl, 'biography' => $biography, 'reference' => $reference,]);
        }
        $note = 'updated';
        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }

    public function editSpecialties(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        if ($db == 'caterers') {
            $specialties = $request->specialties;
            $fileNum = $request->fileNum;
            $filesMax = 5;

            if ($fileNum < 1) {
                $menus = [];
                if ($request->file('menu')) {
                    foreach ($request->file('menu') as $key => $m) {
                        $keyq = $key + 1;
                        $menu = $id_partner . '-' . $m->getClientOriginalName();
                        if ($keyq <= $m) {
                            $m->storeAs('menus', $menu);
                            array_push($menus, $menu);
                        }
                    }
                }
                $menus = json_encode($menus);
            } else {
                $allowed = $filesMax - $fileNum;
                $menus = DB::table($db)->where('id_partner', $id_partner)->value('menu');

                if ($request->file('menu')) {
                    $menus = str_replace(']', ',', $menus);
                    foreach ($request->file('menu') as $key => $i) {
                        if ($key < $allowed) {
                            $menu = $id_partner . '-' . $i->getClientOriginalName();
                            $menus = $menus . '"' . $menu . '",';
                            $i->storeAs('menus', $menu);
                        }
                    }
                    $menus = substr_replace($images, ']', -1, 1);
                }
            }

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['specialities' => $specialties, 'menu' => $menus]);
        }
        //echo $menus;
        $note = 'updated';
        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }

    public function editCatering(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        if ($db == 'event_places') {

            $meals = $request->prepare_meal;
            $affiliate_caterer = $request->aff_caterers;
            $set_num_aff = $request->input('set_num_aff_caterers');
            if ($set_num_aff >= 1) {
                $yes_af_caterers = [];
                for ($i = 1; $i <= $set_num_aff; $i++) {
                    $aff_i = 'caterer: ' . $request->input('aff_caterers_name_' . $i) . ', url: ' . $request->input('aff_caterers_web_' . $i);
                    array_push($yes_af_caterers, $aff_i);
                }
                $yes_af_caterers = json_encode($yes_af_caterers);
            } else {
                $yes_af_caterers = json_encode([$request->input('aff_caterers_partybooker')]);
            }


            $free_caterer = $request->free_caterers;
            $set_num_free = $request->input('set_num_free_caterers');
            if ($set_num_free >= 1) {
                $yes_free_caterers = [];
                for ($i = 1; $i <= $set_num_free; $i++) {
                    $free_i = 'caterer:' . $request->input('free_caterers_name_' . $i) . ',url:' . $request->input('free_caterers_web_' . $i);
                    array_push($yes_free_caterers, $free_i);
                }
            } else {
                $yes_free_caterers = [];
            }
            $yes_free_caterers = json_encode($yes_free_caterers);

            $ext_food = $request->external_food;
            $furniture = json_encode($request->furniture_eq);
            $equipment = json_encode($request->tech_eq);
            $other_eq = $request->othertech_eq;

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['meals' => $meals, 'affiliate_caterer' => $affiliate_caterer, 'yes_af_caterers' => $yes_af_caterers, 'free_caterer' => $free_caterer, 'yes_free_caterers' => $yes_free_caterers, 'ext_food' => $ext_food, 'furniture' => $furniture, 'equipment' => $equipment, 'other_eq' => $other_eq]);
        }
        $note = 'updated';
        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }

    public function editOther(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        if ($db == 'event_places') {
            $staff = json_encode($request->staff);
            $other_staff = $request->otherstaff;
            $accomodation = $request->accomodation;
            $number_questrooms = $request->yes_accomodation;
            $other_services = json_encode($request->other);
            $more_services = $request->otherother_service;

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['staff' => $staff, 'other_staff' => $other_staff, 'accomodation' => $accomodation, 'number_questrooms' => $number_questrooms, 'other_services' => $other_services, 'more_services' => $more_services]);
        }

        if ($db == 'caterers') {
            $logistic = json_encode($request->logistic);
            $staff = json_encode($request->staff);
            $tableware = json_encode($request->tableware);
            $furnishing = json_encode($request->furnishing);
            $decoration = json_encode($request->decoration_el);
            $office = json_encode($request->office_eq);
            $other_services = $request->otheroffice_eq;

            DB::table($db)->
            where('id_partner', $id_partner)->
            update(['logistic' => $logistic, 'staff' => $staff, 'tableware' => $tableware, 'furnishing' => $furnishing, 'decoration' => $decoration, 'office' => $office, 'other_services' => $other_services]);
        }
        $note = 'updated';
        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }

    public function editFood(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        $food_on_site = $request->food_on_site;
        $yes_food = $request->yes_food;
        $catering = $request->catering;
        $caterer_aff = $request->aff_caterers;
        if ($caterer_aff == 'yes') {
            $caterers_aff = null;
        } else {
            $caterers_aff = $request->aff_caterers_partybooker;
        }
        DB::table($db)->
        where('id_partner', $id_partner)->
        update(['food_on_site' => $food_on_site, 'yes_food' => $yes_food, 'catering' => $catering, 'caterer_aff' => $caterer_aff, 'caterers_aff' => $caterers_aff]);
        $note = 'updated';
        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }

    public function editComment(Request $request)
    {
        $id_partner = $request->id_partner;
        $db = $request->db;

        $comment = $request->comment;

        DB::table($db)->
        where('id_partner', $id_partner)->
        update(['comment' => $comment]);
        $note = 'updated';
        if (Auth::user()->type == 'admin') {
            return redirect(LocaleMiddleware::getLocale() . '/cp/partner-cp/' . $id_partner . '?note=' . $note . '#profile');
        } else {
            return redirect(LocaleMiddleware::getLocale() . '/partner-cp?note=' . $note . '#profile');
        }
    }
}
