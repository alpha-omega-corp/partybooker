<?php

namespace Database\Factories;

use App\Models\Services\Partials\ServiceCommon;
use App\Models\Services\Partials\ServiceCost;
use App\Models\Services\Partials\ServiceSchedule;
use App\Models\Services\WineService;
use Illuminate\Database\Eloquent\Factories\Factory;

class WineServiceFactory extends Factory
{
    protected $model = WineService::class;

    public function definition(): array
    {
        return [
            'service_cost_id' => ServiceCost::factory(),
            'service_schedule_id' => ServiceSchedule::factory(),
            'service_common_id' => ServiceCommon::factory(),
        ];
    }
}
