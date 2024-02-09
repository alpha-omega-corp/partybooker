<?php

namespace Database\Factories;

use App\Enums\PaymentType;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Payment>
 */
class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(PaymentType::values()),
            'accepted_at' => now(),
            'expires_at' => now()->addYear(),
        ];
    }
}
