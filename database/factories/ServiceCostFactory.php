<?php

namespace Database\Factories;

use App\Enums\PaymentType;
use App\Models\Services\Partials\ServiceCost;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceCostFactory extends Factory
{
    protected $model = ServiceCost::class;

    public function definition(): array
    {
        return [
            'payment_methods' => $this->faker->randomElement(PaymentType::values()),
            'prices' => $this->faker->randomElement([100, 200, 300]),
            'budget' => $this->faker->randomElement([1000, 2000]),
            'deposit' => $this->faker->randomElement([true, false]),
            'delivery' => $this->faker->randomElement([true, false]),
            'extra' => $this->faker->randomElement([true, false]),

            'extra_specs' => function (array $attributes) {
                return $attributes['extra'] ? json_encode(['Extra 1', 'Extra 2']) : null;
            },
            'delivery_specs' => function (array $attributes) {
                return $attributes['delivery'] ? json_encode(['Delivery 1', 'Delivery 2']) : null;
            },
            'deposit_specs' => function (array $attributes) {
                return $attributes['deposit'] ? json_encode(['Deposit 1', 'Deposit 2']) : null;
            },
        ];
    }
}
