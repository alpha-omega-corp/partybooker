<?php

namespace Database\Factories;

use App\Models\AppInformationLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppInformationLocale>
 */
class AppInformationLocaleFactory extends Factory
{
    protected $model = AppInformationLocale::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraph(4),
        ];
    }
}
