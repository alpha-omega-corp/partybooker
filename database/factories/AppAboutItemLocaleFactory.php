<?php

namespace Database\Factories;

use App\Models\AppAboutItemLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppAboutItemLocale>
 */
class AppAboutItemLocaleFactory extends Factory
{
    protected $model = AppAboutItemLocale::class;

    public function definition(): array
    {
        return [
            'content' => $this->faker->sentence()
        ];
    }


}
