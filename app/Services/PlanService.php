<?php


namespace App\Services;

use App\Enums\PlanEnum;
use App\Interfaces\IPlanService;
use App\Models\PartnerPlanOption;
use App\Models\Plan;
use App\Models\PlanOption;
use App\User;
use Illuminate\Support\Collection;

class PlanService implements IPlanService
{
    public function getPlans(): Collection
    {
        $plans = Plan::with('planOptions')
            ->orderBy('price', 'ASC')
            ->get();

        return $plans->map(function (Plan $plan) {
            $options = [];
            $plan->name = strtolower($plan->name);

            foreach ($plan->planOptions as $option) {
                $options[$option->group][] = $option;
            }

            $plan['options'] = $options;
            return $plan;
        })->filter(function (Plan $plan) {
            return !in_array($plan->name, ['basic', 'commission', 'vip']);
        })->reverse();
    }

    public function startTrial(User $user): bool
    {
        $partnerInfo = $user->partnerInfo;
        $plan = Plan::where('name', PlanEnum::STANDARD)->firstOrFail();

        $user->trial_ends_at = now()->addDays(7);
        $this->applyOptions(
            $partnerInfo->id,
            $plan->id,
            $plan->planOptions->first()->group
        );

        $partnerInfo->plan = $plan->name;
        $partnerInfo->plans_id = $plan->id;
        $partnerInfo->plan_option_group = $plan->planOptions->first()->group;
        $partnerInfo->prev_plan_id = $partnerInfo->plans_id;
        $partnerInfo->prev_plan_option_group = $partnerInfo->plan_option_group;
        $partnerInfo->save();

        return $user->save();
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
}
