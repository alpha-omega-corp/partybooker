<?php

namespace Database\Factories;

use App\Enums\Language;
use App\Enums\PlanType;
use App\Models\AppPlan;
use App\Models\AppPlanLocale;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

/**
 * @extends Factory<AppPlan>
 */
class AppPlanFactory extends Factory
{
    protected $model = AppPlan::class;

    public function definition(): array
    {
        return [
            'color' => $this->faker->hexColor,
            'stripe_key' => function (array $attributes) {
                return config('stripe.' . $attributes['code']);
            },
        ];
    }

    public function configure(): AppPlanFactory
    {
        return $this->afterCreating(function (AppPlan $plan) {
            AppPlanLocale::factory([
                'name' => $plan->code,
            ])
                ->for($plan, 'plan')
                ->count(2)
                ->sequence(fn(Sequence $sequence) => [
                    'lang' => $sequence->index == 0
                        ? Language::EN->value
                        : Language::FR->value,
                ])
                ->create();
        });
    }

    public function standard(): AppPlanFactory
    {
        return $this->state(function () {
            return [
                'code' => PlanType::STANDARD->value,
                'price' => 300,
                'upload_count' => 5,
                'advert_count' => 1,
                'tag_count' => 1,
                'has_requests' => true,
                'has_videos' => true,
            ];
        });
    }

    public function premium(): self
    {
        return $this->state(function () {
            return [
                'code' => PlanType::PREMIUM->value,
                'price' => 500,
                'upload_count' => 10,
                'advert_count' => 2,
                'tag_count' => 2,
                'has_requests' => true,
                'has_videos' => true,
            ];
        });
    }

    public function exclusive(): self
    {
        return $this->state(function () {
            return [
                'code' => PlanType::EXCLUSIVE->value,
                'price' => 950,
                'upload_count' => 15,
                'advert_count' => 3,
                'tag_count' => 3,
                'has_requests' => true,
                'has_videos' => true,
            ];
        });
    }
}
