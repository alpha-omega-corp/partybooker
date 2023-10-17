<?php

namespace Database\Factories;

use App\Models\PartnerPlanOption;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PartnerPlanOption>
 */
class PartnerPlanOptionFactory extends Factory
{
    protected $model = PartnerPlanOption::class;

    public function definition(): array
    {
        return [
            'categories_count' => 1,
            'sub_categories_count' => 2,
            'extra' => null,
            'active' => null,
        ];
    }
}
