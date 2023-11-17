<?php


namespace App\Interfaces;


use App\Http\Requests\StorePaymentMethod;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Stripe\Customer;

interface IPlanService
{
    public function getPlans();

    public function startPlan(User $user, Customer $customer, StorePaymentMethod $request): bool;

    public function activatePlan(string $name): bool;

    public function applyOptions($partnerInfoId, $planId, $planGroup): void;

    public function formatOptions(Collection $options): array;

}
