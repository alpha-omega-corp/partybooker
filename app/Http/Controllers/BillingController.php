<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentMethod;
use App\Interfaces\IPlanService;
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
        $this->planService->startPlan($request->user(), $request->user()->createAsStripeCustomer(), $request);

        return redirect()
            ->route('profile-advert', Auth::user()->id_partner)
            ->with([
                'success' => 'Your subscription is now active!'
            ]);
    }

}
