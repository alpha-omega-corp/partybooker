<?php

namespace Database\Factories;

use App\Enums\PaymentType;
use App\Models\PartnerPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PartnerPayment>
 */
class PartnerPaymentFactory extends Factory
{
    protected $model = PartnerPayment::class;

    public function definition(): array
    {
        $acceptedAt = $this->faker->randomElement([
            now(),
            now()->subDay(),
            now()->subMonth()
        ]);

        $expiresAt = $this->faker->randomElement([
            now()->addYear()->addMonth(),
            now()->addYear()->addDay(),
            now()->addYear()
        ]);

        return [
            'type' => $this->faker->randomElement(PaymentType::values()),
            'accepted_at' => $acceptedAt,
            'expires_at' => $expiresAt,
        ];
    }
}
