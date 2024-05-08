<?php

namespace Database\Factories;

use App\Models\AppCommentLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppCommentLocale>
 */
class AppCommentLocaleFactory extends Factory
{
    protected $model = AppCommentLocale::class;

    public function definition(): array
    {
        return [
            'content' => $this->faker->sentence(40),
        ];
    }
}
