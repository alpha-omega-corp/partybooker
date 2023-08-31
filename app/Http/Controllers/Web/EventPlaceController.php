<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\EventPlace;
use App\Models\PartnersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventPlaceController extends Controller
{

	public function create($advertId, Request $request)
	{

		if (Auth::user()->type == 'admin') {
			$id_partner = $request->id_partner;
		} else {
			$id_partner = Auth::user()->id_partner;
		}

		$validator = \Validator::make($request->all(), [
			'comment' => 'max:500'
		]);

		if($validator->fails()){
			return redirect()->back()->withErrors($validator->errors());
		}

		\DB::beginTransaction();

		try {
			$partner = PartnersInfo::where('id_partner', $id_partner)->first();
			if (!$partner) {
				throw new \Exception('Partner info not found forbidden');
			}

			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
			if (!$advert) {
				throw new \Exception('Access forbidden');
			}

			$item = new EventPlace();

			$opening = $request->get('opening');
			$temp = [];
			foreach ($opening as $time) {
				if (!$time['open'] && !$time['close'] && !$time['description']) {
					continue;
				}
				$temp[] = [
					'open' => $time['open'],
					'close' => $time['close'],
					'description' => $time['description']
				];
			}

			$item->working_time = \json_encode($temp);

			//WORKING SCHEDULE
			//Working days
			$item->working_days = json_encode($request->working_days);

			//Opening time
			$item->opening = $request->open;

			//Closing time
			$item->closing = $request->close;

			//Annual holidays
			$item->holidays = $request->holidays;

			//Extansion of basic schedule
			$item->extansion = $request->extansion;
			$item->ext_true = $request->yes_extansion;


			//RATES & CONDITIONS
			//Price
			//$price = $request->price;
//			$item->price_for = $request->price_for;
//			$item->other_price = $request->other_price;

			//Budget
			//$budget = $request->budget;

			//Payment methods
			$item->paymeny = json_encode($request->pay_methods);
			$item->other_payment = $request->otherpayment;

			//Deposit on booking
			$item->deposit = $request->deposit;

			//GENERAl INFO
			//Cocktail reception - standing capacity
			$item->coctail = $request->cocktail_capacity ?? 0;

			//Banquet capacity
			$item->banquet = $request->banquet_capacity ?? 0;

			//Outdoor facility
			$item->outdoor = $request->outdor_capacity ?? 0;

			//Sitting schema
			$item->sitting = json_encode($request->sitting_schema);

			//Conference room include room name + capacity
			$rooms = $request->set_num;
			$room = [];
			for ($i = 1; $i <= $rooms; $i++) {
				$n = trim($request->input('room_name_' . $i));
				$c = trim($request->input('room_cap_' . $i));
				if (!$n || !$c) {
					continue;
				}
				$room[] = [
					'name' => $request->input('room_name_' . $i),
					'capacity' => $request->input('room_cap_' . $i)
				];
			}
			$item->room = $room;

			//Reduced mobility access
			$item->reduced_mob = $request->reduced_mobility;

			//Car park
			$item->car = $request->car_park;

			//Bar, dance floor
			$item->facilities = $request->facilities ? json_encode($request->facilities) : json_encode([]);
			$item->oth_facilities = $request->otherfacilities;

			//Convenience
			$item->convenience = $request->conveniences ? json_encode($request->conveniences) : json_encode([]);

			//Possibilty of bringing wine
			$item->alcohole = $request->alcohol;
			$item->alcohole_yes = $request->yes_alcohol;

			//CATERING - STEWARDSHIP
			//Catering options
			//prepare meal?
			$item->meals = $request->prepare_meal;

			//affiliated caterers
			$item->affiliate_caterer = $request->aff_caterers;
			$set_num_aff = $request->input('set_num_aff_caterers');
			$yes_af_caterers = [];
			if ($set_num_aff >= 1) {
				for ($i = 1; $i <= $set_num_aff; $i++) {
					$yes_af_caterers[] = [
						'name' => trim($request->input('aff_caterers_name_' . $i)),
						'url' => trim($request->input('aff_caterers_web_' . $i))
					];
				}
			} else {
				$yes_af_caterers[] = [
					'name' => $request->input('aff_caterers_partybooker'),
					'url' => ''
				];
			}

			$item->yes_af_caterers = json_encode($yes_af_caterers);

			//free choice of caterer
			$item->free_caterer = $request->free_caterers;
			$set_num_free = $request->input('set_num_free_caterers');
			$yes_free_caterers = [];
			if ($set_num_free >= 1) {
				for ($i = 1; $i <= $set_num_free; $i++) {
					$free_i = 'caterer:' . $request->input('free_caterers_name_' . $i) . ',url:' . $request->input('free_caterers_web_' . $i);
					array_push($yes_free_caterers, $free_i);
				}
			}
			$item->yes_free_caterers = json_encode($yes_free_caterers);
			//external food
			$item->ext_food = $request->external_food;

			//Available furniture
			$item->furniture = $request->furniture_eq ?  json_encode($request->furniture_eq): json_encode([]);
			$item->id_partner = $partner->id_partner;

			//Technical equipment
			$item->equipment = $request->tech_eq ?  json_encode($request->tech_eq): json_encode([]);
			$item->other_eq = $request->othertech_eq;

			//OTHER SERVICES
			//Staff
			$item->staff = $request->staff ? json_encode($request->staff) : json_encode([]);
			$item->other_staff = $request->otherstaff;

			//Accomodation
			$item->accomodation = $request->accomodation ?? "";
			$item->number_questrooms = $request->yes_accomodation;

			//Other
			$item->other_services = $request->other ? json_encode($request->other) : json_encode([]);
			$item->more_services = $request->otherother_service;

			//COMMENT
			$item->comment = $request->comment;
			$item->save();

			//$advert->service()->save($item);
			$advert->status = Advert::STATUS_ACTIVE;
			$item->advert()->save($advert);
			//$advert->update();

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());

		}

		return redirect()->back()->with('success', 'Created');
	}

}
