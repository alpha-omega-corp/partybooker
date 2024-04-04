<?php

namespace Database\Factories;

use App\Models\ServiceWine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ServiceWine>
 */
class ServiceWineFactory extends Factory
{
    protected $model = ServiceWine::class;

    public function definition(): array
    {
        return [
            'min_guests' => $this->faker->numberBetween(1, 100),
            'max_guests' => $this->faker->numberBetween(100, 200),
        ];
    }
}
