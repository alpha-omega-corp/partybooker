<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Partner;
use App\Models\Services\EquipmentService;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class EquipmentController extends Controller
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

        DB::rollBack();
        try {
            $partner = Partner::where('id_partner', $id_partner)->first();
            if (!$partner) {
                throw new Exception('Partner info not found forbidden');
            }

            $advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
            if (!$advert) {
                throw new Exception('Access forbidden');
            }

            $item = new EquipmentService();
            $item->id_partner = $partner->id_partner;

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
//			$price = $request->price;
//			$item->price_for = $request->price_for;
//			$item->other_price = $request->other_price;

            //Budget
            $budget = $request->budget;

            //Payment methods
            $item->paymeny = json_encode($request->pay_methods);
            $item->other_payment = $request->otherpayment;

            //Deposit on booking
            $item->deposit = $request->deposit;

            //Delivery charge
            $item->delivery = $request->delivery;

            //Additional expences
            $item->expences = $request->expences;

            //GENERAl INFO
            //Geographical limits
            $item->geo = $request->geo;

            //Complimentary services
            $item->complim_services = $request->complim_services;

            //Proposed equipment
            $item->proposed = $request->proposed;

            //References
            $item->references = $request->references;

            //COMMENT
            $item->comment = $request->comment;

            $item->save();

            $advert->status = Advert::STATUS_ACTIVE;
            $item->advert()->save($advert);
            Partner::where('id_partner', $id_partner)->update(['budget' => $budget]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());

        }

        return redirect()->back()->with('success', 'Created');
    }

}
