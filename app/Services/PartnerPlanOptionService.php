<?php


namespace App\Services;



use App\Interfaces\IPartnerPlanOptionService;
use App\Models\PartnerPlanOption;
use App\Models\PartnersInfo;
use App\Models\PlanOption;

class PartnerPlanOptionService implements IPartnerPlanOptionService
{

	public function ApplyPlanOptions($partnerId, $planId, $planGroup)
	{
		$options = PlanOption::where('plans_id', $planId)->where('group', $planGroup)->get();
		if (!$options) {
			throw new \Exception('Options not found');
		}

		PartnerPlanOption::where('partners_info_id',$partnerId)->delete();
		$temp = [];
		foreach ($options as $option) {
			if ($option->categories_count > 1) {
				for ($i = 1; $i <= $option->categories_count; $i++) {
					$temp[] = [
						'partners_info_id' => $partnerId,
						'categories_count' => 1,
						'sub_categories_count' => $option->sub_categories_count
					];
				}
			} else {
				$temp[] = [
					'partners_info_id' => $partnerId,
					'categories_count' => 1,
					'sub_categories_count' => $option->sub_categories_count
				];
			}
		}

		PartnerPlanOption::insert($temp);

	}
}
