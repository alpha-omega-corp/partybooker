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
            'rooms' => [
                [
                    'name' => 'Room 1',
                    'capacity' => 100
                ],
                [
                    'name' => 'Room 2',
                    'capacity' => 200
                ]
            ],
            'caterers' => [
                [
                    'name' => 'Caterer 1',
                    'link' => $this->faker->url
                ],
                [
                    'name' => 'Caterer 2',
                    'link' => $this->faker->url
                ]
            ],
        ];
    }
}
