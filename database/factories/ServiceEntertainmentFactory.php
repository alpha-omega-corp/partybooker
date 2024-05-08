<?php

namespace Database\Factories;

use App\Models\ServiceEntertainment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ServiceEntertainment>
 */
class ServiceEntertainmentFactory extends Factory
{
    protected $model = ServiceEntertainment::class;

    public function definition(): array
    {
        return [
            'min_guests' => $this->faker->numberBetween(1, 100),
            'max_guests' => $this->faker->numberBetween(100, 200),
        ];
    }
}
