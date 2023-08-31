<?php


namespace App\Services;


interface IPaymentTransactionService
{
	public function SetPayment($from_date, $plan_id, $partner_id);

	public function ConfirmPaymentByPaymentId($payment_id);
}