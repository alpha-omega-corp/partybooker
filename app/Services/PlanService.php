<?php


namespace App\Services;

use App\Http\Requests\StorePaymentMethod;
use App\Interfaces\ILocaleService;
use App\Interfaces\IPlanService;
use App\Models\AppPlan;
use App\Models\Partner;
use App\Models\PartnerPlanOption;
use App\Models\PlanOption;
use App\Models\User;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Laravel\Cashier\Cashier;
use Stripe\Customer;

class PlanService implements IPlanService
{
    private ILocaleService $localeService;

    public function __construct(ILocaleService $localeService)
    {
        $this->localeService = $localeService;
    }

    public function getPlans(): Collection
    {
        $plans = AppPlan::with('planOptions')
            ->orderBy('price', 'ASC')
            ->get();

        return $plans->map(function (AppPlan $plan) {
            $options = [];
            $plan->name = strtolower($plan->name);

            foreach ($plan->planOptions as $option) {
                $options[$option->group][] = $option;
            }

            $plan['options'] = $options;
            return $plan;
        })->filter(function (AppPlan $plan) {
            return !in_array($plan->name, ['vip']);
        })->reverse();
    }

    public function startPlan(User $user, Customer $customer, StorePaymentMethod $request): bool
    {
        $validated = (object)$request->validated();
        $paymentId = $validated->method;

        $user->update([
            'stripe_id' => $customer->id
        ]);

        Cashier::findBillable($customer->id)
            ->updateDefaultPaymentMethod($paymentId);

        // 100% discount for dev environment
        if (App::environment('dev') || $user->email === 'bleyo@alphomega.org') {
            $intent = $user
                ->newSubscription('PartyBooker', $validated->plan)
                ->withCoupon('cb1Rq5FS');
        } else {
            $intent = $user
                ->newSubscription('PartyBooker', $validated->plan);
        }

        $trialDays = Carbon::now()->addDays(10);
        $intent->trialUntil($trialDays);
        $user->trial_ends_at = $trialDays;

        $geoLocale = $this->localeService->addressValues($user->partnerInfo->address);
        try {
            $intent->create($paymentId, [
                'email' => $user->email,
                'name' => $user->partnerInfo->fr_company_name,
                'phone' => $user->partnerInfo->phone,
                'id_partner' => $user->partnerInfo->id,
                'address' => [
                    'city' => $geoLocale['locality'],
                    'country' => $geoLocale['country'],
                    'line1' => $geoLocale['administrative_area_level_2'],
                    'line2' => $geoLocale['route'],
                    'postal_code' => $geoLocale['postal_code'],
                    'state' => $geoLocale['administrative_area_level_1'],
                ]
            ]);
        } catch (Exception $e) {
            dd($e);
        }

        return $this->activatePlan(strtolower($validated->name), $user->partnerInfo);
    }

    public function activatePlan(string $planName, Partner $partner): bool
    {
        $plan = AppPlan::where('name', $planName)->firstOrFail();

        $this->applyOptions(
            $partner->id,
            $plan->id,
            $plan->planOptions->first()->group
        );

        $partner->plan = $plan->name;
        $partner->plans_id = $plan->id;
        $partner->plan_option = 1;
        $partner->plan_option_group = $plan->planOptions->first()->group;
        $partner->prev_plan_id = $partner->plans_id;
        $partner->prev_plan_option_group = $partner->plan_option_group;

        return $partner->save();
    }

    public function applyOptions($partnerInfoId, $planId, $planGroup): void
    {
        $options = PlanOption::where('plans_id', $planId)->where('group', $planGroup)->get();
        PartnerPlanOption::where('partners_info_id', $partnerInfoId)->delete();

        $temp = [];
        foreach ($options as $option) {
            if ($option->categories_count > 1) {
                for ($i = 1; $i <= $option->categories_count; $i++) {
                    $temp[] = [
                        'partners_info_id' => $partnerInfoId,
                        'categories_count' => 1,
                        'sub_categories_count' => $option->sub_categories_count
                    ];
                }
            } else {
                $temp[] = [
                    'partners_info_id' => $partnerInfoId,
                    'categories_count' => 1,
                    'sub_categories_count' => $option->sub_categories_count
                ];
            }
        }

        PartnerPlanOption::insert($temp);
    }

    public function getPlanOptions($planId): array
    {
        $planOptions = PlanOption::where('plans_id', $planId)->get();
        $temp = [];
        foreach ($planOptions as $option) {
            $temp[$option->group][] = $option;
        }

        $options = [];
        foreach ($temp as $id => $opt) {
            $count = 0;
            foreach ($opt as $item) {
                $count++;
                if ($count === count($opt)) {
                    $options[] = [
                        'group' => $id,
                        'name' => json_encode($item)
                    ];
                }
            }
        }

        return $options;
    }
}
