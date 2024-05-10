<?php

namespace Database\Factories;

use App\Models\RequestService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<RequestService>
 */
class RequestServiceFactory extends Factory
{
    protected $model = RequestService::class;

    public function definition(): array
    {
        return [
            'guests' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->date(),
        ];
    }
}
