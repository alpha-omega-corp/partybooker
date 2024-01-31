<?php

namespace Database\Factories;

use App\Models\Services\Partials\ServiceCost;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCostFactory extends Factory
{
    protected $model = ServiceCost::class;

    public function definition(): array
    {
        return [
            'prices' => "[
            ]",
            'payment_methods' => "[]",
            'budget' => $this->faker->randomElement([1000, 2000, null]),
            'has_deposit' => true,
            'has_delivery' => true,
            'has_extra' => false,
            'extra_specs' => function (array $attributes) {
                return $attributes['has_extra'] ? "['Extra 1', 'Extra 2']" : null;
            },
            'delivery_specs' => function (array $attributes) {
                return $attributes['has_delivery'] ? "['Delivery 1', 'Delivery 2']" : null;
            },
            'deposit_specs' => function (array $attributes) {
                return $attributes['has_deposit'] ? "['Deposit 1', 'Deposit 2']" : null;
            },
        ];
    }
}
