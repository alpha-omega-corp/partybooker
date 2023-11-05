<?php


namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Entertainment;
use App\Models\PartnersInfo;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class EntertainmentController extends Controller
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
            $partner = PartnersInfo::where('id_partner', $id_partner)->first();
            if (!$partner) {
                throw new Exception('Partner info not found forbidden');
            }

            $advert = Advert::where('id', $advertId)->where('partners_info_id', $partner->id)->first();
            if (!$advert) {
                throw new Exception('Access forbidden');
            }

            $item = new Entertainment();
            $item->id_partner = $partner->id_partner;

            $item->working_days = json_encode($request->working_days);
            $item->duration = $request->duration;
            $item->holidays = $request->holidays;
            $item->extansion = $request->extansion;
            $item->ext_true = $request->yes_extansion;
            $item->other_price = $request->other_price;
            $budget = $request->budget;
            $item->paymeny = json_encode($request->pay_methods) ?? json_encode([]);
            $item->other_payment = $request->otherpayment;
            $item->deposit = $request->deposit;
            $item->travelling_exp = $request->travelling;
            $item->additional_exp = $request->additional;
            $item->geo = $request->geo;
            $item->services = $request->services;
            $item->participants = $request->participants;
            $item->equipment = $request->equipment;
            $item->eq_not_incl = $request->eq_not_incl;
            $item->biography = $request->biography ?? '';
            $item->reference = $request->references;
            $item->comment = $request->comment;

            $item->save();

            $advert->status = Advert::STATUS_ACTIVE;
            $item->advert()->save($advert);

            PartnersInfo::where('id_partner', $id_partner)->update(['budget' => $budget]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Created');
    }

}
