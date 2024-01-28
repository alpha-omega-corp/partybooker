<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    protected $model = Plan::class;

    public function definition(): array
    {
        return [
            'stripe_key' => function (array $attributes) {
                return config('stripe.' . $attributes['name']);
            },
        ];
    }
}
