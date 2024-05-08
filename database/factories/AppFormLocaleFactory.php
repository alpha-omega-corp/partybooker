<?php

namespace Database\Factories;

use App\Models\AppFormLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppFormLocale>
 */
class AppFormLocaleFactory extends Factory
{
    protected $model = AppFormLocale::class;

    public function definition(): array
    {
        return [
            'label' => $this->faker->word,
        ];
    }
}
