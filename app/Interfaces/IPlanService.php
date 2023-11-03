<?php


namespace App\Interfaces;


use App\User;

interface IPlanService
{
    public function getPlans();

    public function startTrial(User $user): bool;

}
