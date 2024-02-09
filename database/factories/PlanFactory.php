<?php

namespace Database\Factories;

use App\Enums\PlanType;
use App\Models\Plan;
use App\Models\PlanOption;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Plan>
 */
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

    public function standard(): self
    {
        return $this->state(function () {
            return [
                'name' => PlanType::STANDARD->value,
                'price' => 300,
                'uploads' => 5,
                'request' => true,
                'video' => true,
            ];
        })->for(PlanOption::factory([
            'advert_count' => 1,
            'tag_count' => 2,
        ]), 'option');
    }

    public function premium(): self
    {
        return $this->state(function () {
            return [
                'name' => PlanType::PREMIUM->value,
                'price' => 500,
                'uploads' => 10,
                'request' => true,
                'video' => true,
            ];
        })->for(PlanOption::factory([
            'advert_count' => 2,
            'tag_count' => 3,
        ]), 'option');
    }

    public function exclusive(): self
    {
        return $this->state(function () {
            return [
                'name' => PlanType::EXCLUSIVE->value,
                'price' => 950,
                'uploads' => 15,
                'request' => true,
                'video' => true,
            ];
        })->for(PlanOption::factory([
            'advert_count' => 3,
            'tag_count' => 4,
        ]), 'option');
    }
}
