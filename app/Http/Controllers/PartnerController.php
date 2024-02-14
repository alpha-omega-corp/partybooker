<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdatePlanRequest;
use App\Models\Partner;
use App\Models\Plan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function __construct()
    {

    }

    public function dashboard(): View
    {
        $user = Auth::user();

        return view('app.partner.dashboard', [
            'user' => $user->withoutRelations(),
            'partner' => $user->partner,
            'plans' => Plan::all()
        ]);
    }

    public function plan(Partner $partner, UpdatePlanRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $plan = Plan::where('name', $validated['plan'])->first();

        $partner->payment->update([
            'plan_id' => $plan->id
        ]);

        return back()->with('success', 'Plan updated successfully');
    }

}
