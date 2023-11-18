<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentMethod;
use App\Interfaces\IPlanService;
use App\Models\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{

    public IPlanService $planService;

    public function __construct(IPlanService $planService)
    {
        $this->planService = $planService;
    }

    public function invoice(Request $request, string $invoiceId)
    {
        $settings = Setting::all()->first();
        return $request->user()->downloadInvoice($invoiceId, [
            'vendor' => config('app.name'),
            'location' => $settings->address,
            'phone' => $settings->phone,
            'email' => $settings->email,
            'url' => 'https://partybooker.ch',
            'vendorVat' => 'BE123456789',
            'product' => ucfirst($request->user()->partnerInfo->plan) . ' ' . config('app.name'),
        ]);
    }

    public function subscribe(StorePaymentMethod $request)
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

    public function switch(Request $request)
    {
        $request->user()->subscription('PartyBooker')
            ->endTrial()
            ->skipTrial()
            ->swap($request->input('plan'));

        $this->planService->activatePlan($request->input('name'));
        User::where('id', $request->user()->id)->update([
            'trial_ends_at' => null,
        ]);

        return redirect()
            ->route('profile-plans', Auth::user()->id_partner)
            ->with([
                'success' => 'Plan changed!'
            ]);
    }

    public function updatePayment(Request $request)
    {
        $request->user()->updateDefaultPaymentMethod($request->input('method'));
        return redirect()
            ->route('profile-plans', Auth::user()->id_partner)
            ->with([
                'success' => 'Payment details updated!'
            ]);
    }

}
