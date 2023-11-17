<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentMethod;
use App\Interfaces\IPlanService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{

    public IPlanService $planService;

    public function __construct(IPlanService $planService)
    {
        $this->planService = $planService;
    }

    public function updatePaymentMethod(StorePaymentMethod $request)
    {
        $request->validated();
        $this->planService->startPlan(
            $request->user(),
            $request->user()->createOrGetStripeCustomer(),
            $request
        );

        return redirect()
            ->route('profile-advert', Auth::user()->id_partner)
            ->with([
                'success' => 'Your subscription is now active!'
            ]);
    }

    public function cancel()
    {
        auth()->user()->subscription('PartyBooker')->cancel();

        return redirect()
            ->route('profile-advert', Auth::user()->id_partner)
            ->with([
                'success' => 'Your subscription is now cancelled!'
            ]);
    }

    public function resume()
    {
        auth()->user()->subscription('PartyBooker')->resume();

        return redirect()
            ->route('profile-advert', Auth::user()->id_partner)
            ->with([
                'success' => 'Billing cycle re-activated!'
            ]);
    }

    public function switchSubscription(Request $request)
    {
        $request->user()->subscription('PartyBooker')
            ->endTrial()
            ->skipTrial()
            ->swap($request->input('plan'));

        $this->planService->activatePlan($request->input('name'));
        $request->user()->update([
            'trial_ends_at' => null,
        ]);

        return redirect()
            ->route('profile-plans', Auth::user()->id_partner)
            ->with([
                'success' => 'Plan changed!'
            ]);
    }

}
