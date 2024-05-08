<?php

namespace Database\Factories;

use App\Models\AppFaqLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppFaqLocale>
 */
class AppFaqLocaleFactory extends Factory
{
    protected $model = AppFaqLocale::class;

    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence,
            'answer' => $this->faker->paragraph,
        ];
    }
}
