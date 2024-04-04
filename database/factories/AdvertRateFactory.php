<?php

namespace Database\Factories;

use App\Models\AdvertRate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdvertRate>
 */
class AdvertRateFactory extends Factory
{
    protected $model = AdvertRate::class;

    public function definition(): array
    {
        return [
            'prices' => [
                [
                    'price' => 100,
                    'description' => $this->faker->sentence,
                ],
                [
                    'price' => 200,
                    'description' => $this->faker->sentence,
                ],
            ],
            'budget' => '1000-2000 CHF',
            'has_deposit' => true,
            'deposit_description' => $this->faker->sentence,
        ];
    }
}
