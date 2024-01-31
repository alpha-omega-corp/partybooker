<?php

namespace Database\Factories;

use App\Models\Services\EventService;
use App\Models\Services\Partials\ServiceCommon;
use App\Models\Services\Partials\ServiceCost;
use App\Models\Services\Partials\ServiceSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventServiceFactory extends Factory
{
    protected $model = EventService::class;

    public function definition(): array
    {
        return [
            'service_cost_id' => ServiceCost::factory(),
            'service_schedule_id' => ServiceSchedule::factory(),
            'service_common_id' => ServiceCommon::factory(),
        ];
    }
}
