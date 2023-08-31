<?php


namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Middleware\LocaleMiddleware;
use App\Models\Advert;
use App\Models\AdvertCategory;
use App\Models\EventPlace;
use App\Models\PartnerPlanOption;
use App\Models\PartnersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class AdvertController extends Controller
{

	public function activateOption(Request $request)
	{
		if (Auth::user()->type == 'admin') {
			$id = $request->id_partner;
		} else {
			$id = Auth::user()->id_partner;
		}

		\DB::beginTransaction();
		try {
			$partner = PartnersInfo::where('id_partner', $id)->first();
			if (!$partner) {
				throw new \Exception("Partner not found");
			}

			$option = PartnerPlanOption::where('partners_info_id', $partner->id)->where('id', $request->get('option'))->first();
			if (!$option) {
				throw new \Exception("Partner option not found or already used.");
			}

			if ($option->sub_categories_count != \count($request->get('sub_category'))) {
				throw new \Exception("Select correct categories or sub categories");
			}

			$advert = new Advert();
			$advert->partners_info_id = $partner->id;
			$advert->category_id = $request->get('category');
			$advert->status = Advert::STATUS_DRAFT;
			if ($advert->save()) {
				$temp = [];
				foreach ($request->get('sub_category') as $sub) {
					$temp = [
						'advert_id' => $advert->id,
						'category_id' => $sub
					];

					AdvertCategory::insert($temp);
				}
			} else {
				throw new \Exception("Can`t save advert");
			}

			$option->update(['active' => 1]);

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', "Plan option activated");
	}


	public function editComment($advertId, Request $request)
	{
		if (Auth::user()->type == 'admin') {
			$id_partner = $request->id_partner;
		} else {
			$id_partner = Auth::user()->id_partner;
		}

		$validator = Validator::make($request->all(),[
			'comment' => 'max:500'
		]);

		if($validator->fails()){
			return redirect()->back()->withErrors($validator->errors());
		}

		try {
			$partner = PartnersInfo::where('id_partner', $id_partner)->first();
			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
			if(!$advert){
				throw new \Exception("Not found advert");
			}

			$advert->service()->update(['comment' => $request->get('comment')]);

		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', 'Comment updated');
	}


	public function editRates($advertId, Request $request)
	{

		if (Auth::user()->type == 'admin') {
			$id_partner = $request->id_partner;
		} else {
			$id_partner = Auth::user()->id_partner;
		}

		\DB::beginTransaction();
		try {

			$partner = PartnersInfo::where('id_partner', $id_partner)->first();
			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
			if(!$advert){
				throw new \Exception("Not found advert");
			}

		//	$price_for = $request->price_for;
			$other_price = $request->other_price;
			$paymeny = $request->pay_methods ? json_encode($request->pay_methods) : json_decode([]);
			$other_payment = $request->otherpayment;
			$deposit = $request->deposit;
			$p_terms = $request->p_terms;
			$delivery = $request->delivery;
			$expences = $request->expences;
			$travelling_exp = $request->travelling;
			$additional_exp = $request->additional;

			PartnersInfo::where('id_partner', $id_partner)
				->update([
//					'price' => $request->price,
					'budget' => $request->budget
				]);

			$s = $advert->service();
			$s->update([
			//	'price_for' => $price_for,
				'other_price' => $other_price,
				'paymeny' => $paymeny,
				'other_payment' => $other_payment,
				'deposit' => $deposit,
				'p_terms' => $p_terms,
				'delivery' => $delivery,
				'expences' => $expences,
				'travelling_exp' => $travelling_exp,
				'additional_exp' => $additional_exp

			]);

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', 'Rates updated');
	}


	public function editSchedule($advertId, Request $request)
	{
		try {
			if (Auth::user()->type == 'admin') {
				$id_partner = $request->id_partner;
			} else {
				$id_partner = Auth::user()->id_partner;
			}

			$partner = PartnersInfo::where('id_partner', $id_partner)->first();
			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->with(['service'])->first();
			if(!$advert){
				throw new \Exception("Not found advert");
			}

			$working_days = \json_encode($request->working_days);
			$opening = $request->open ?? null;
			$closing = $request->close ?? null;
			$duration = $request->duration;
			$holidays = $request->holidays;
			$extansion = $request->extansion;
			$ext_true = $request->yes_extansion;
			$opening_upon = $request->opening_upon;

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

			$service = $advert->service();
			$service->update([
				'working_days' => $working_days ?? \json_encode([]),
				'opening' => $opening,
				'closing' => $closing,
				'holidays' => $holidays,
				'duration' => $duration,
				'extansion' => $extansion,
				'ext_true' => $ext_true,
				'working_time' => \json_encode($temp),
				'opening_upon' => $opening_upon
			]);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', 'Schedule updated');
	}


	public function editCatering($advertId, Request $request){
		if (Auth::user()->type == 'admin') {
			$id_partner = $request->id_partner;
		} else {
			$id_partner = Auth::user()->id_partner;
		}

		$partner = PartnersInfo::where('id_partner', $id_partner)->first();

		\DB::beginTransaction();
		try {

			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
			if(!$advert){
				throw new \Exception("Not found advert");
			}

			$meals = $request->prepare_meal;
			$affiliate_caterer = $request->aff_caterers;
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
			$yes_af_caterers = json_encode($yes_af_caterers);

			$free_caterer = $request->free_caterers;
			$set_num_free = $request->input('set_num_free_caterers');
			if ($set_num_free >= 1) {
				$yes_free_caterers = [];
				for ($i = 1; $i <= $set_num_free; $i++) {
					$free_i = 'caterer: ' . $request->input('free_caterers_name_' . $i) . ',url: ' . $request->input('free_caterers_web_' . $i);
					array_push($yes_free_caterers, $free_i);
				}
			} else {
				$yes_free_caterers = [];
			}
			$yes_free_caterers = json_encode($yes_free_caterers);

			$ext_food = $request->external_food;
			$furniture = $request->furniture_eq ? json_encode($request->furniture_eq) : json_encode([]);
			$equipment = $request->tech_eq ? json_encode($request->tech_eq) : json_encode([]);
			$other_eq = $request->othertech_eq;

			$service = $advert->service();
			$service->update(['meals' => $meals, 'affiliate_caterer' => $affiliate_caterer, 'yes_af_caterers' => $yes_af_caterers, 'free_caterer' => $free_caterer, 'yes_free_caterers' => $yes_free_caterers, 'ext_food' => $ext_food, 'furniture' => $furniture, 'equipment' => $equipment, 'other_eq' => $other_eq]);

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', 'Catering info updated');
	}


	public function editGeneral($advertId, Request $request)
	{
		if (Auth::user()->type == 'admin') {
			$id_partner = $request->id_partner;
		} else {
			$id_partner = Auth::user()->id_partner;
		}

		$partner = PartnersInfo::where('id_partner', $id_partner)->first();

		\DB::beginTransaction();
		try {
			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
			if(!$advert){
				throw new \Exception("Not found advert");
			}

			$aService = $advert->service();
			$data = [];
			switch ($advert->service->getMorphObjectAttribute()) {
				case 'EventPlace':
					$coctail = $request->cocktail_capacity;
					$banquet = $request->banquet_capacity;
					$outdoor = $request->outdor_capacity;
					$sitting = $request->sitting_schema ? json_encode($request->sitting_schema) : json_encode([]);
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

					$reduced_mob = $request->reduced_mobility;
					$car = $request->car_park;
					$facilities = $request->facilities ? json_encode($request->facilities) : json_encode([]);
					$oth_facilities = $request->otherfacilities;
					$convenience = $request->conveniences ? json_encode($request->conveniences) : json_encode([]);
					$alcohole = $request->alcohol;
					$alcohole_yes = $request->yes_alcohol;

					$data = ['coctail' => $coctail, 'banquet' => $banquet, 'outdoor' => $outdoor, 'sitting' => $sitting, 'room' => $room, 'reduced_mob' => $reduced_mob, 'car' => $car, 'facilities' => $facilities, 'oth_facilities' => $oth_facilities, 'convenience' => $convenience, 'alcohole' => $alcohole, 'alcohole_yes' => $alcohole_yes];
					break;
				case 'Caterer':
					$geo = $request->geo;
					$min_guests = $request->min_guests;
					$max_guests = $request->max_guests ?? null;
					$smood = $request->smood;

					$data = ['geo' => $geo, 'min_guests' => $min_guests, 'max_guests' => $max_guests, 'smood' => $smood];
					break;
				case 'Wine':
					$services = $request->set_num_service;
					$service = [];
					for ($i = 1; $i <= $services; $i++) {
						$service[] = [
							'name' => $request->input('service_activity_name'.$i),
							'description' => $request->input('service_activity_description'.$i)
						];
					}

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

					$furniture = $request->furniture_eq ? json_encode($request->furniture_eq) : json_encode([]);
					$other_furniture = $request->otherfurniture_eq;

					$equipment = $request->tech_eq ? json_encode($request->tech_eq) : json_encode([]);
					$other_equipment = $request->othertech_eq;

					$data = ['service' => $service, 'participant' => $participant, 'wine' => $wine, 'affiliation' => $affiliation, 'reward' => $reward, 'article' => $article, 'art_d' => $art_d, 'art_l' => $art_l, 'furniture' => $furniture, 'other_furniture' => $other_furniture, 'equipment' => $equipment, 'other_equipment' => $other_equipment];
					break;
				case 'Equipment':
					$geo = $request->geo;
					$complim_services = $request->complim_services;
					$proposed = $request->proposed;
					$references = $request->references;

					$data = ['geo' => $geo, 'complim_services' => $complim_services, 'proposed' => $proposed, 'references' => $references];
					break;
				case 'Entertainment':
					$geo = $request->geo;
					$services = $request->services;
					$participants = $request->participants;
					$equipment = $request->equipment;
					$eq_not_incl = $request->eq_not_incl;
					$biography = $request->biography;
					$reference = $request->references;

					$data = ['geo' => $geo, 'services' => $services, 'participants' => $participants, 'equipment' => $equipment, 'eq_not_incl' => $eq_not_incl, 'biography' => $biography, 'reference' => $reference];
					break;
				default:
					throw new NotFoundResourceException();
			}

			if(\count($data) > 0) {
				$aService->update($data);
			}

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', 'General info updated');
	}


	public function editOther($advertId, Request $request){
		if (Auth::user()->type == 'admin') {
			$id_partner = $request->id_partner;
		} else {
			$id_partner = Auth::user()->id_partner;
		}

		$partner = PartnersInfo::where('id_partner', $id_partner)->first();

		\DB::beginTransaction();
		try {
			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
			if(!$advert){
				throw new \Exception("Not found advert");
			}

			$service = $advert->service();
			$s = $advert->service->getMorphObjectAttribute();

			$data = [];
			switch ($advert->service->getMorphObjectAttribute()) {
				case 'EventPlace':
					$staff = $request->staff ? json_encode($request->staff) : json_encode([]);
					$other_staff = $request->otherstaff;
					$accomodation = $request->accomodation;
					$number_questrooms = $request->yes_accomodation;
					$other_services = $request->other ? json_encode($request->other) : json_encode([]);
					$more_services = $request->otherother_service;

					$data = ['staff' => $staff, 'other_staff' => $other_staff, 'accomodation' => $accomodation, 'number_questrooms' => $number_questrooms, 'other_services' => $other_services, 'more_services' => $more_services];
					break;
				case 'Caterer':
					$logistic = $request->logistic ? json_encode($request->logistic) : json_encode([]);
					$staff = $request->staff ?  json_encode($request->staff) : json_encode([]);
					$tableware = $request->tableware ?  json_encode($request->tableware) : json_encode([]);
					$furnishing = $request->furnishing ?  json_encode($request->furnishing) : json_encode([]);
					$decoration = $request->decoration_el ?  json_encode($request->decoration_el) : json_encode([]);
					$office = $request->office_eq ?  json_encode($request->office_eq) : json_encode([]);
					$other_services = $request->otheroffice_eq;

					$data = ['logistic' => $logistic, 'staff' => $staff, 'tableware' => $tableware, 'furnishing' => $furnishing, 'decoration' => $decoration, 'office' => $office, 'other_services' => $other_services];
					break;
				default:
					throw new NotFoundResourceException();
			}

			if(\count($data) > 0) {
				$service->update($data);
			}

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', 'Info updated');
	}
}
