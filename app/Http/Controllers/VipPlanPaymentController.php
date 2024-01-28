<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\PartnerVipPlan;
use App\Models\PartnerVipPlanCategory;
use App\Models\User;
use Auth;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class VipPlanPaymentController extends Controller
{
    private const PAYMENT_CURRENCY = 'CHF';

    public function CardPayment(Request $request)
    {
        $datetime1 = new DateTime($request->get('start_date'));
        $datetime2 = new DateTime($request->get('end_date'));
        $difference = $datetime1->diff($datetime2);

        $monthes = $difference->m + 1;
        $price = (PartnerVipPlan::FIRST_CATEGORY_PRICE + ($request->get('categories_count') - 1) * PartnerVipPlan::ADDITIONAL_CATEGORY_PRICE) * $monthes;

        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $user = User::where("id", Auth::user()->id)->first();

            // Add customer to stripe
            $customer = Customer::create(array(
                'email' => $user->email,
                'source' => $request->get('stripeToken')
            ));

            // Unique order ID
            $orderID = strtoupper(str_replace('.', '', uniqid('', true)));

            // Convert price to cents
            $itemPrice = $price * 100;

            // Charge a credit or a debit card
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $itemPrice,
                'currency' => self::PAYMENT_CURRENCY,
                'description' => "Plan : VIP",
                'metadata' => array(
                    'order_id' => $orderID
                )
            ));

            // Retrieve charge details
            $chargeJson = $charge->jsonSerialize();
            if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {

                // If the order is successful
                if ($chargeJson['status'] == 'succeeded') {
                    $partner = Partner::where('id_partner', Auth::user()->id_partner)->first();
                    if (!$partner) {
                        throw new Exception("Partner not found");
                    }

                    $vipPlan = PartnerVipPlan::firstOrNew(['partners_info_id' => $partner->id]);
                    $vipPlan->partners_info_id = $partner->id;
                    $vipPlan->is_payed = 1;
                    $vipPlan->start_date = $request->get('start_date');
                    $vipPlan->end_date = $request->get('end_date');
                    $vipPlan->categories_count = $request->get('categories_count');
                    if ($vipPlan->save()) {
                        PartnerVipPlanCategory::where('partner_vip_plans_id', $vipPlan->id)->delete();
                    } else {
                        throw new Exception('Saving error.');
                    }

                    return redirect()->back()->with('success', 'Payment success');
                } else {
                    return redirect()->back()->with('error', 'Payment failed');
                }
            } else {
                throw new Exception("Error on form submission.");
            }

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function setVipStatusAdmin(Request $request)
    {

        try {
            $id = $request->get('partners_info_id');

            $partner = Partner::where('id_partner', $id)->first();
            if (!$partner) {
                throw new Exception("Partner not found.");
            }

            $vipPlan = PartnerVipPlan::firstOrNew(['partners_info_id' => $partner->id]);
            $vipPlan->partners_info_id = $partner->id;
            $vipPlan->is_payed = 1;
            $vipPlan->start_date = $request->get('start_date');
            $vipPlan->end_date = $request->get('end_date');
            $vipPlan->categories_count = $request->get('categories_count');
            if ($vipPlan->save()) {
                PartnerVipPlanCategory::where('partner_vip_plans_id', $vipPlan->id)->delete();
            } else {
                throw new Exception('Saving error.');
            }

            return redirect()->back()->with('success', 'VIP Plan selected');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
