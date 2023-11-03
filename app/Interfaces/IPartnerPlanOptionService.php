<?php


namespace App\Interfaces;


interface IPartnerPlanOptionService
{
    public function applyOptions(string $partnerId, int $planId, int $planGroup);
}
