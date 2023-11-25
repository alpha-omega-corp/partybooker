<?php


namespace App\Interfaces;


use App\Http\Requests\StorePaymentMethod;
use App\Models\PartnersInfo;
use App\User;
use Stripe\Customer;

interface IPlanService
{
    public function getPlans();

    public function startPlan(User $user, Customer $customer, StorePaymentMethod $request): bool;

    public function activatePlan(string $planName, PartnersInfo $partner): bool;

    public function applyOptions(int $partnerInfoId, int $planId, int $planGroup): void;

    public function getPlanOptions(int $planId): array;

}
