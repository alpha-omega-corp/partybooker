<?php

namespace Database\Factories;

use App\Models\AppAboutLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppAboutLocale>
 */
class AppAboutLocaleFactory extends Factory
{
    protected $model = AppAboutLocale::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
        ];
    }
}
