<?php

namespace Database\Factories;

use App\Models\AppPlanLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppPlanLocale>
 */
class AppPlanLocaleFactory extends Factory
{
    protected $model = AppPlanLocale::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
        ];
    }
}
