<?php

namespace Database\Factories;

use App\Models\ServiceEvent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ServiceEvent>
 */
class ServiceEventFactory extends Factory
{
    protected $model = ServiceEvent::class;

    public function definition(): array
    {
        return [
            'min_guests' => $this->faker->numberBetween(1, 100),
            'max_guests' => $this->faker->numberBetween(100, 200),
        ];
    }
}
