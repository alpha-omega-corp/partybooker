<?php

namespace Database\Factories;

use App\Models\AppPlan;
use App\Models\RequestPartner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<RequestPartner>
 */
class RequestPartnerFactory extends Factory
{
    protected $model = RequestPartner::class;

    public function definition(): array
    {
        return [
            'app_plan_id' => AppPlan::all()->random()->id,
        ];
    }
}
