<?php


namespace App\Interfaces;


interface IPartnerPlanOptionService{
	public function ApplyPlanOptions($partnerId, $planId, $planGroup);
}
