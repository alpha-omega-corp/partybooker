<?php

namespace App\Http\Controllers;

use App\Enums\PaymentType;
use App\Enums\PlanType;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Interfaces\IFileService;
use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\CompanyContact;
use App\Models\CompanySocial;
use App\Models\CompanyStatistic;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\User;
use App\Services\FileService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    private IFileService $fileService;

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    public function dashboard(Partner $partner): View
    {
        return view('app.partner.dashboard', [
            'partner' => $partner,
            'payment' => $partner->payment,
            'plan' => $partner->payment->plan,
            'statistic' => $partner->company->statistics,
            'social' => $partner->company->socials,
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

    public function store(StorePartnerRequest $request)
    {
        $data = $request->validated();

        $company = Company::create([
            'name' => $data['company'],
            'languages' => $data['language'],
            'slug' => Str::of($data['company'])->slug(),
            'company_social_id' => CompanySocial::create()->id,
            'company_contact_id' => CompanyContact::create()->id,
            'company_address_id' => CompanyAddress::create()->id,
            'company_statistic_id' => CompanyStatistic::create()->id,
        ]);

        $payment = Payment::create([
            'type' => PaymentType::DEFAULT,
            'plan_id' => Plan::ofType(PlanType::from($data['plan']))->first()->id,
            'accepted_at' => now(),
            'expires_at' => now()->addYear(),
        ]);

        $partner = Partner::create([
            'company_id' => $company->id,
            'payment_id' => $payment->id
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'partner_id' => $partner->id,
            'verified_at' => Auth::user()->isAdmin() ? now() : null,
        ]);

        return redirect()->route('partner.dashboard', $partner);
    }

}
