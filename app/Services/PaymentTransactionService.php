<?php


namespace App\Services;

use App\Interfaces\IPartnerPlanOptionService;
use App\Models\PartnersInfo;
use App\Models\PaymentTransactions;
use App\Models\Plans;

class PaymentTransactionService implements IPaymentTransactionService
{
	private $planOptionService;

	private $priorityList = [
		'exclusif' => 1,
		'premium' => 2,
		'standart' => 3,
		'commission' => 4,
		'basic' => 5,
	];

	public function __construct(IPartnerPlanOptionService $planOptionService){
		$this->planOptionService = $planOptionService;
	}

	public function SetPayment($from_date, $plan_id, $partner_id)
	{
		$plan = Plans::where("id", $plan_id)->with(['planOptions'])->first();
		$plan_name = strtolower($plan->name);

		$partner = PartnersInfo::where("id_partner", $partner_id)->first();
		if (!$partner) {
			throw new \Exception("Partner not found");
		}

		if ($partner->plans_id == $plan->id) {
			$planGroup = $partner->plan_option_group;
		} else {
			$planGroup = count($plan->planOptions) > 1 ? null : $plan->planOptions()->first()->group;
			if($planGroup != null){
				$this->planOptionService->ApplyPlanOptions($partner->id, $plan->id, $planGroup);
			}
		}

		$partner->update(
			[
				"plan" => $plan_name, //TODO: remove
				"plans_id" => $plan->id,
				"plan_option" => null, //TODO: remove
				"plan_option_group" => $planGroup,
				"prev_plan_option_group" => $partner->plan_option_group,
				"prev_plan_id" => $partner->plans_id,
				"public" => 0,
				"category_1" => null, //TODO: remove
				"category_2" => null,
				"category_3" => null,
				"subcat_1" => null,
				"subcat_2" => null,
				"subcat_3" => null,
				"payed" => date("Y-m-d", strtotime($from_date)),
				"expiration_date" => date("Y-m-d", strtotime($from_date . "+ 365 days")),
				"payment_status" => 1,
				"waiting_approve_plan" => null,
				'priority' => isset($this->priorityList[$plan_name]) ? $this->priorityList[$plan_name] : 10
			]
		);
	}

	public function ConfirmPaymentByPaymentId($payment_id)
	{
		$transaction = PaymentTransactions::where("payment_id", $payment_id)->first();
		if (!$transaction) {
			throw new \Exception("Transaction is not valid");
		}

		$plan = Plans::where("id", $transaction->plan_id)->first();
		$plan_name = strtolower($plan->name);

		$partner = PartnersInfo::where("id_partner", $transaction->partner_id)->first();
		if (!$partner) {
			throw new \Exception("Partner not found");
		}

		if ($partner->plans_id == $plan->id) {
			$planGroup = $partner->plan_option_group;
		} else {
			$planGroup = count($plan->planOptions) > 1 ? null : $plan->planOptions()->first()->group;
			if($planGroup != null){
				$this->planOptionService->ApplyPlanOptions($partner->id, $plan->id, $planGroup);
			}
		}

		$partner->update(
			[
				"plan" => $plan_name, //TODO: remove
				"plans_id" => $plan->id,
				"plan_option" => null, //TODO: remove
				"plan_option_group" => $planGroup,
				"prev_plan_option_group" => $partner->plan_option_group,
				"prev_plan_id" => $partner->plans_id,
				"public" => 0,
				"category_1" => null, //TODO: remove
				"category_2" => null,
				"category_3" => null,
				"subcat_1" => null,
				"subcat_2" => null,
				"subcat_3" => null,
				"payed" => date("Y-m-d"),
				"expiration_date" => date("Y-m-d", strtotime(date("Y-m-d") . "+ 365 days")),
				"payment_status" => 1,
				"waiting_approve_plan" => null,
				'priority' => isset($this->priorityList[$plan_name]) ? $this->priorityList[$plan_name] : 10
			]
		);
	}
}
