<?php


namespace App\Interfaces;


use App\User;
use Illuminate\Database\Eloquent\Collection;

interface IPlanService
{
    public function getPlans();

    public function startTrial(User $user): bool;

    public function applyOptions($partnerInfoId, $planId, $planGroup): void;

    public function formatOptions(Collection $options): array;

}
