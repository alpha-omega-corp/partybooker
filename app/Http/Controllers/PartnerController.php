<?php

namespace App\Http\Controllers;

use App\Enums\PaymentType;
use App\Enums\PlanType;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePlanRequest;
use App\Models\AppPlan;
use App\Models\Company;
use App\Models\CompanyContact;
use App\Models\CompanyLocation;
use App\Models\CompanySocial;
use App\Models\CompanyStatistic;
use App\Models\Partner;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    public function dashboard(Company $company): View
    {
        $partner = $company->partner;

        return view('app.partner.dashboard', [
            'partner' => $partner,
            'payment' => $partner->payment,
            'plan' => $partner->payment->plan,
            'statistic' => $company->statistics,
            'social' => $company->social,
        ]);
    }

    public function plan(Partner $partner, UpdatePlanRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $plan = AppPlan::where('name', $validated['plan'])->first();

        $partner->payment->update([
            'plan_id' => $plan->id
        ]);

        return back()->with('success', 'AppPlan updated successfully');
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
            'company_address_id' => CompanyLocation::create()->id,
            'company_statistic_id' => CompanyStatistic::create()->id,
        ]);

        $payment = Payment::create([
            'type' => PaymentType::DEFAULT,
            'app_plan_id' => AppPlan::ofType(PlanType::from($data['plan']))->first()->id,
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

        return redirect()->route(__('route.profile'), $partner->company);
    }

    public function destroy(Request $request): JsonResponse
    {
        $id = $request->input('partner')['id'];
        $partner = Partner::find($id);

        $partner->payment()->delete();
        $partner->user()->delete();

        foreach ($partner->company->adverts as $advert) {
            $advert->tags()->delete();
            $advert->statistics()->delete();
            $advert->images->each(function ($image) {
                $image->locales()->delete();
                $image->delete();
            });

            $advert->service->serviceable()->delete();
            $advert->service->schedule()->delete();
            $advert->service->rate()->delete();
            $advert->service->files()->delete();

            $advert->service()->delete();
            $advert->locales()->delete();
            $advert->delete();
        }

        $partner->company()->delete();


        $partner->delete();

        return response()->json();
    }

}
