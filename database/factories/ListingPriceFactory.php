<?php

namespace Database\Factories;

use App\Enums\PaymentMethod;
use App\Models\ListingPrice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ListingPrice>
 */
class ListingPriceFactory extends Factory
{
    protected $model = ListingPrice::class;

    public function definition(): array
    {
        return [
            'payment_methods' => PaymentMethod::values(),
            'price_specs' => [
                [
                    'name' => 'Price 1',
                    'price' => 100,
                ],
                [
                    'name' => 'Price 2',
                    'price' => 200,
                ]
            ],
            'delivery_specs' => function () {
                return $this->faker->boolean ? [
                    [
                        'name' => 'Delivery 1',
                        'price' => 100,
                    ],
                    [
                        'name' => 'Delivery 2',
                        'price' => 200,
                    ],
                ] : null;
            },
            'deposit_specs' => function () {
                return $this->faker->boolean ? [
                    [
                        'name' => 'Deposit 1',
                        'price' => 100,
                    ],
                    [
                        'name' => 'Deposit 2',
                        'price' => 200,
                    ],
                ] : null;
            },
            'budget' => $this->faker->randomElement([1000, 2000, null]),
        ];
    }
}
