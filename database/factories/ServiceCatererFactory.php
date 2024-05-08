<?php

namespace Database\Factories;

use App\Models\ServiceCaterer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ServiceCaterer>
 */
class ServiceCatererFactory extends Factory
{
    protected $model = ServiceCaterer::class;

    public function definition(): array
    {
        return [
            'min_guests' => $this->faker->numberBetween(1, 100),
            'max_guests' => $this->faker->numberBetween(100, 200),
            'delivery_services' => [
                [
                    'service' => $this->faker->company,
                    'service_url' => $this->faker->url,
                ]
            ],
            'specialty' => $this->faker->sentence,
        ];
    }
}
