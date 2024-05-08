<?php

namespace Database\Factories;

use App\Models\AppUspLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppUspLocale>
 */
class AppUspLocaleFactory extends Factory
{
    protected $model = AppUspLocale::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
        ];
    }
}
