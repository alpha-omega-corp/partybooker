<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Partner;
use App\Models\Services\WineService;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class WineController extends Controller
{

    public function create($advertId, Request $request)
    {
        if (Auth::user()->type == 'admin') {
            $id_partner = $request->id_partner;
        } else {
            $id_partner = Auth::user()->id_partner;
        }

        $validator = Validator::make($request->all(), [
            'comment' => 'max:500'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        DB::beginTransaction();

        try {
            $partner = Partner::where('id_partner', $id_partner)->first();
            if (!$partner) {
                throw new Exception('Partner info not found forbidden');
            }

            $advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
            if (!$advert) {
                throw new Exception('Access forbidden');
            }

            $item = new WineService();
            $item->id_partner = $id_partner;

            //WORKING SCHEDULE
            //Working days
            $item->working_days = json_encode($request->working_days);

            //Opening time
            $item->opening = $request->open;

            //Closing time
            $item->closing = $request->close;

            //Opening upon appointment
            $item->opening_upon = $request->opening_upon;

            //Annual holidays
            $item->holidays = $request->holidays;

            //Extansion of basic schedule
            $item->extansion = $request->extansion;
            $item->ext_true = $request->yes_extansion;

            //RATES & CONDITIONS
            //Price
            $price = $request->price;
            //	$item->price_for = $request->price_for;
            $item->other_price = $request->other_price;

            //Budget
            //$item->budget = $request->budget;

            //Payment methods
            $item->paymeny = json_encode($request->pay_methods);
            $item->other_payment = $request->otherpayment;

            //Deposit on booking
            $item->deposit = $request->deposit;

            //GENERAL INFO
            //Service name
            $services = $request->set_num_service;
            $service = [];
            for ($i = 1; $i <= $services; $i++) {
                $service[] = [
                    'name' => $request->input('service_activity_name' . $i),
                    'description' => $request->input('service_activity_description' . $i)
                ];
            }
            $item->service = $service;

            //Participant capacity
            $participants = $request->set_num_participant;
            $participant = [];
            for ($i = 1; $i <= $participants; $i++) {
                $participant_i = 'space name: ' . $request->input('space_name' . $i) . ', min: ' . $request->input('min_num' . $i) . ', max: ' . $request->input('max_num' . $i);
                array_push($participant, $participant_i);
            }
            $item->participant = json_encode($participant);

            //WineService description
            $wines = $request->set_num_wine;
            $wine = [];
            for ($i = 1; $i <= $wines; $i++) {
                $wine_i = 'name: ' . $request->input('wine_name' . $i) . ', description: ' . $request->input('wine_description' . $i);
                array_push($wine, $wine_i);
            }
            $item->wine = json_encode($wine);

            //Affiliations
            $affiliations = $request->set_num_aff;
            $affiliation = [];
            for ($i = 1; $i <= $affiliations; $i++) {
                $affiliation_i = 'name: ' . $request->input('aff_name' . $i) . ', link: ' . $request->input('aff_link' . $i);
                array_push($affiliation, $affiliation_i);
            }
            $item->affiliation = json_encode($affiliation);

            //Rewards
            $rewards = $request->set_num_reward;
            $reward = [];
            for ($i = 1; $i <= $rewards; $i++) {
                $reward_i = 'name: ' . $request->input('price_name' . $i) . ', contest: ' . $request->input('contest_name' . $i) . ', reward: ' . $request->input('reward' . $i);
                array_push($reward, $reward_i);
            }
            $item->reward = json_encode($reward);

            //Article
            $article = $request->article;
            $art_d = null;
            if ($request->file('article_d')) {
                $art_d = $id_partner . '-' . $request->file('article_d')->getClientOriginalName();
                $request->file('article_d')->storeAs('articles', $art_d);
            }
            $item->art_l = $request->article_l;

            //Available furniture & equipment
            $item->furniture = json_encode($request->furniture_eq);
            $item->other_furniture = $request->otherfurniture_eq;

            //Technical equipment
            $item->equipment = json_encode($request->tech_eq);
            $item->other_equipment = $request->othertech_eq;

            //FOOD & SERVICE INFO
            //Food on site
            $item->food_on_site = $request->food_on_site;
            $item->yes_food = $request->yes_food;

            //Catering service available
            $item->catering = $request->catering;

            //CatererService affiliation
            $item->caterer_aff = $request->aff_caterers;
            $item->caterers_aff = $request->aff_caterers_partybooker;

            //COMMENT
            $item->comment = $request->comment;

            $item->save();

            //$advert->service()->save($item);
            $advert->status = Advert::STATUS_ACTIVE;
            $item->advert()->save($advert);
            //$advert->update();

            Partner::where('id_partner', $id_partner)->update([
                //'price'=> $price,
                'budget' => $request->budget
            ]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());

        }

        return redirect()->back()->with('success', 'Created');

    }

    public function editFood($advertId, Request $request)
    {

        if (Auth::user()->type == 'admin') {
            $id_partner = $request->id_partner;
        } else {
            $id_partner = Auth::user()->id_partner;
        }

        DB::beginTransaction();

        try {
            $partner = Partner::where('id_partner', $id_partner)->first();
            if (!$partner) {
                throw new Exception('Partner info not found forbidden');
            }

            $advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
            if (!$advert) {
                throw new Exception('Access forbidden');
            }

            $service = $advert->service();
            $food_on_site = $request->food_on_site;
            $yes_food = $request->yes_food;
            $catering = $request->catering;
            $caterer_aff = $request->aff_caterers;
            if ($caterer_aff == 'yes') {
                $caterers_aff = null;
            } else {
                $caterers_aff = $request->aff_caterers_partybooker;
            }

            $service->update(['food_on_site' => $food_on_site, 'yes_food' => $yes_food, 'catering' => $catering, 'caterer_aff' => $caterer_aff, 'caterers_aff' => $caterers_aff]);
            DB::commit();
            return redirect()->back()->with('success', 'Created');

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
