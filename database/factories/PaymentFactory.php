<?php

namespace Database\Factories;

use App\Enums\PaymentMethod;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            'method' => $this->faker->randomElement(array_column(PaymentMethod::cases(), 'value')),
            'accepted_at' => now(),
            'expires_at' => now()->addYear(),
        ];
    }
}
