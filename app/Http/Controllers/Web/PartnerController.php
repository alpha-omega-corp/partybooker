<?php


namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\PartnerPlanOption;
use App\Models\PartnersInfo;
use App\Models\Plans;
use App\Services\IPaymentTransactionService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{

	private $_transactionService;

	public function __construct(IPaymentTransactionService $transactionService)
	{
		$this->_transactionService = $transactionService;
	}


	public function adverts(Request $request)
	{

		if (Auth::user()->type == 'admin') {
			$id = $request->id_partner;
		} else {
			$id = Auth::user()->id_partner;
		}

		$user = User::where('id_partner', $id)->with(['partnerInfo', 'partnerInfo.planOptions'])->first();
		$user->has_free_options = $user->partnerInfo->planOptions()->whereNull('active')->count() ? true : false;

		$adverts = Advert::where('partners_info_id', $user->partnerInfo->id)->with(['service'])->orderBy('status')->get();

		return view('web.partner.adverts', ['user' => $user, 'adverts' => $adverts]);
	}


	public function getOptionsAjax(Request $request)
	{
		if (Auth::user()->type == 'admin') {
			$id = $request->id_partner;
		} else {
			$id = Auth::user()->id_partner;
		}

		$partner = PartnersInfo::where('id_partner', $id)->first();
		if (!$partner) {
			return response()->json([], 200);
		}

		$data = PartnerPlanOption::where('partners_info_id', $partner->id)->whereNull('active')->get();

		return response()->json($data, 200);
	}

	public function setCommission(Request $request)
	{
		\DB::beginTransaction();
		try {
			$partner = PartnersInfo::where('id_partner', $request->get('partner_id'))->first();
			if (!$partner) {
				throw new \Exception("Partner not found");
			}

			$plan = Plans::where('name', 'LIKE', '%commission%')->first();
			if (!$plan) {
				throw new \Exception("Plan not found");
			}

			$this->_transactionService->SetPayment($request->start_date, $plan->id, $partner->id_partner);
			$partner->commission_amount = $request->get('commission_amount');
			$partner->save();

			\DB::commit();
		} catch (\Exception $e) {
			\DB::rollBack();
			return redirect()->back()->with("error", $e->getMessage());
		}
		return redirect()->back()->with('success', 'Changes saved');
	}
}
