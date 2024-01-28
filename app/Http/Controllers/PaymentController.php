<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LocaleMiddleware;
use App\Http\Requests\CashPaymentRequest;
use App\Interfaces\IPaymentTransactionService;
use App\Models\Partner;
use App\Models\PaymentTransactions;
use App\Models\Plan;
use App\Models\User;
use Auth;
use Config;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\InputFields;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\WebProfile;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;


class PaymentController extends Controller
{
    private const PAYMENT_CURRENCY = 'CHF';
    private $_api_context;
    private $_transactionService;

    public function __construct(IPaymentTransactionService $transactionService)
    {
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
        $this->_transactionService = $transactionService;
    }


    public function cashPayment(CashPaymentRequest $request)
    {
        try {
            $user = User::where("id", Auth::user()->id)->first();
            $partner = Partner::where("id_partner", $user->id_partner)->first();
            if ($partner == null) {
                throw new Exception("Partner not found");
            }
            $plan = Plan::where("id", $request->plan_id)->first();
            if ($plan == null) {
                throw new Exception("Plan not found");
            }

            if (env('APP_ENV') == 'production') {
                Mail::send('email.plans.partner-plan-request', ["plan_name" => $plan->name], function ($message) use ($user, $plan) {
                    $message->from(env("MAIL_USERNAME"), 'Plan cash payment request');
                    $message->to($user->email)->subject("Plan cash request {$plan->name}");
                });

                Mail::send('email.plans.admin-plan-request', ["user_name" => $user->name, "plan_name" => $plan->name, "email" => $user->email, "phone" => $partner->phone], function ($message) use ($user, $plan) {
                    $message->from(env("MAIL_USERNAME"), 'Plan cash payment request');
                    $message->to(env("MAIL_CONTACT"))->subject("Plan cash request {$plan->name}");
                });
            }

            Partner::where("id_partner", $user->id_partner)->update([
                "waiting_approve_plan" => strtolower($plan->name)
            ]);

        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', "Thank You for choosing {$plan->name} plan! We will contact you about the next steps.");
    }


    public function paypalPayment(Request $request)
    {
        try {
            $plan = Plan::where("id", $request->plan_id)->first();
            if ($plan == null) {
                throw new Exception("Plan not found");
            }

            $partner = Partner::where('id_partner', Auth::user()->id_partner)->first();
            if (!$partner) {
                throw new Exception("Partner not found");
            }

            if ($partner->discount) {
                $price = $plan->price * (1 - ($partner->discount / 100));
            } else {
                $price = $plan->price;
            }


            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            $item_1 = new Item();

            $item_1->setName($plan->name)/** item name **/
            ->setCurrency(self::PAYMENT_CURRENCY)
                ->setQuantity(1)
                ->setPrice($price);
            /** unit price **/

            $item_list = new ItemList();
            $item_list->setItems(array($item_1));

            $amount = new Amount();
            $amount->setCurrency(self::PAYMENT_CURRENCY)
                ->setTotal($plan->price);

            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Your transaction description');

            $redirect_urls = new RedirectUrls();
            $redirect_urls->setReturnUrl(URL::route('status'))/** Specify return URL **/
            ->setCancelUrl(URL::route('status'));


            $inputFields = new InputFields();
            $inputFields->setNoShipping(1);

            $webProfile = new WebProfile();
            $webProfile->setName('test' . uniqid())->setInputFields($inputFields);

            $webProfileId = $webProfile->create($this->_api_context)->getId();

            $payment = new Payment();
            $payment->setIntent('Sale')
                ->setPayer($payer)
                ->setRedirectUrls($redirect_urls)
                ->setTransactions(array($transaction))
                ->setExperienceProfileId($webProfileId);
            try {

                $payment->create($this->_api_context);

            } catch (PPConnectionException $ex) {
                if (Config::get('app.debug')) {
                    throw new Exception('Connection timeout');
                } else {
                    throw new Exception('Some error occur, sorry for inconvenient');
                }
            }

            foreach ($payment->getLinks() as $link) {
                if ($link->getRel() == 'approval_url') {
                    $redirect_url = $link->getHref();
                    break;
                }
            }

            /** add payment ID to session **/
            Session::put('paypal_payment_id', $payment->getId());

            $user = User::where("id", Auth::user()->id)->first();
            $transaction = new PaymentTransactions();
            $transaction->fill([
                'plan_id' => $plan->id,
                'payment_id' => $payment->getId(),
                'amount' => $price,
                'status' => PaymentTransactions::STATUS_IN_PROGRESS,
                'partner_id' => $user->id_partner
            ]);
            if (!$transaction->save()) {
                throw new Exception('Cant save transaction.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Unknown error occurred. ' . $e->getMessage());
        }


        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }
        return redirect()->back()->with('error', 'Unknown error occurred');
    }


    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        try {

            /** clear the session payment ID **/
            Session::forget('paypal_payment_id');
            if (empty($request->get('PayerID')) || empty($request->get('token'))) {
                throw new Exception("Payment failed");
            }

            $payment = Payment::get($payment_id, $this->_api_context);
            $execution = new PaymentExecution();
            $execution->setPayerId($request->get('PayerID'));

            /**Execute the payment **/
            $result = $payment->execute($execution, $this->_api_context);

            if ($result->getState() == 'approved') {
                PaymentTransactions::where("payment_id", $payment_id)
                    ->update([
                        "status" => PaymentTransactions::STATUS_SUCCESS
                    ]);

                $this->_transactionService->ConfirmPaymentByPaymentId($payment_id);
                return redirect(LocaleMiddleware::getLocale() . "/partner-cp#plan")->with('success', 'Payment success');
            }
        } catch (Exception $e) {

            PaymentTransactions::where("payment_id", $payment_id)
                ->update([
                    "status" => PaymentTransactions::STATUS_ERROR,
                    "message" => $e->getMessage()
                ]);

            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('error', 'Payment failed');
    }


    public function CardPayment(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $plan = Plan::find($request->plan_id);
            $user = User::where("id", Auth::user()->id)->first();

            $partner = Partner::where('id_partner', Auth::user()->id_partner)->first();
            if (!$partner) {
                throw new Exception("Partner not found");
            }

            if ($partner->discount) {
                $price = $plan->price * (1 - ($partner->discount / 100));
            } else {
                $price = $plan->price;
            }

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
                'description' => "Plan :" . $plan->name,
                'metadata' => array(
                    'order_id' => $orderID
                )
            ));

            // Retrieve charge details
            $chargeJson = $charge->jsonSerialize();

            $transaction = new PaymentTransactions();

            if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {

                // If the order is successful
                if ($chargeJson['status'] == 'succeeded') {
                    $transaction->fill([
                        'plan_id' => $plan->id,
                        'payment_id' => $chargeJson['balance_transaction'],
                        'amount' => $price,
                        'status' => $chargeJson['status'],
                        'partner_id' => $user->id_partner
                    ]);
                    $transaction->save();
                    $this->_transactionService->ConfirmPaymentByPaymentId($chargeJson['balance_transaction']);

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

}
