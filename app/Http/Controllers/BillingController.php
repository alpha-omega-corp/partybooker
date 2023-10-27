<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentMethod;
use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;
use Laravel\Cashier\Exceptions\IncompletePayment;

class BillingController extends Controller
{

    public function updatePaymentMethod(StorePaymentMethod $request)
    {
        $validated = (object)$request->validated();
        $paymentId = $validated->method;
        $user = $request->user();

        if (!$user->stripe_id) {
            $stripeCustomer = $user->createOrGetStripeCustomer();
            $user->update([
                'stripe_id' => $stripeCustomer->id
            ]);
        }

        Cashier::findBillable($user->stripe_id)
            ->updateDefaultPaymentMethod($paymentId);

        // 100% discount for dev environment
        if (App::environment('dev') || $user->email === 'bleyo@alphomega.org') {
            $user
                ->newSubscription('PartyBooker', $validated->plan)
                ->withCoupon('cb1Rq5FS')
                ->create($paymentId);
        } else {
            $user
                ->newSubscription('PartyBooker', $validated->plan)
                ->create($paymentId);
        }

        $planName = ucfirst($validated->name);
        $plan = Plans::where('name', $planName)->firstOrFail();
        $planOptionGroup = $plan->planOptions->first()->group;

        $user->partnerInfo->update([
            'plan' => $planName,
            'plans_id' => $plan->id,
            'plan_option_group' => $planOptionGroup,
            'prev_plan_id' => $user->partnerInfo->plans_id,
            'prev_plan_option_group' => $user->partnerInfo->plan_option_group,
            'payment_status' => 1
        ]);


        return redirect()
            ->route('profile', Auth::user()->id_partner)
            ->with([
                'success' => 'Your subscription is now active!'
            ]);
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        try {
            $newSubscription = $user->newSubscription('PartyBooker')->create($request->payment_method, ['email' => $user->email]);
        } catch (IncompletePayment $exception) {
            return redirect()->back()->with(['error_message' => $exception->getMessage()]);
        }

        return redirect()->route('profile')->with(['success' => 'Your subscription is now active!']);
    }
}
