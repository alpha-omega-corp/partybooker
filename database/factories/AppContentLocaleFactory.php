<?php

namespace Database\Factories;

use App\Models\AppContentLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppContentLocale>
 */
class AppContentLocaleFactory extends Factory
{
    protected $model = AppContentLocale::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'content' => '<p>' . $this->faker->paragraph(10) . '</p>',
        ];
    }
}
