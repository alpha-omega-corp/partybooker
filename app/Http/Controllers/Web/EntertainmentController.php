<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Entertainment;
use App\Models\PartnersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntertainmentController extends Controller
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

		\DB::rollBack();
		try {
			$partner = PartnersInfo::where('id_partner', $id_partner)->first();
			if (!$partner) {
				throw new \Exception('Partner info not found forbidden');
			}

			$advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
			if (!$advert) {
				throw new \Exception('Access forbidden');
			}

			$item = new Entertainment();
			$item->id_partner = $partner->id_partner;

			$item->working_days = json_encode($request->working_days);

			//Duration
			$item->duration = $request->duration;

			//Annual holidays
			$item->holidays = $request->holidays;

			//Extansion of basic schedule
			$item->extansion = $request->extansion;
			$item->ext_true = $request->yes_extansion;


			//RATES & CONDITIONS
			//Price
//			$price = $request->price;
//			$item->price_for = $request->price_for;
//			$item->other_price = $request->other_price;

			//Budget
			$budget = $request->budget;

			//Payment methods
			$item->paymeny = json_encode($request->pay_methods) ?? json_encode([]);
			$item->other_payment = $request->otherpayment;

			//Deposit on booking
			$item->deposit = $request->deposit;

			//Travelling expenses
			$item->travelling_exp = $request->travelling;

			//Additional expenses
			$item->additional_exp = $request->additional;

			//GENERAL INFO
			//Geografical limit
			$item->geo = $request->geo;

			//List of your services
			$item->services = $request->services;

			//Number of participants
			$item->participants = $request->participants;

			//Equipment provided
			$item->equipment = $request->equipment;

			//Equipment not included
			$item->eq_not_incl = $request->eq_not_incl;

			//Biography
			$item->biography = $request->biography ?? '';

			//Reference
			$item->reference = $request->references;

			//COMMENT
			$item->comment = $request->comment;

			$item->save();

			$advert->status = Advert::STATUS_ACTIVE;
			$item->advert()->save($advert);

			PartnersInfo::where('id_partner', $id_partner)->update(['budget' => $budget]);

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());
		}

		return redirect()->back()->with('success', 'Created');
	}

}
