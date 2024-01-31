<?php

namespace Database\Factories;

use App\Models\CategoryLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryLocaleFactory extends Factory
{
    protected $model = CategoryLocale::class;

    public function definition(): array
    {
        return [
            'description' => $this->faker->sentence(10),
        ];
    }

    public function english(): Factory
    {
        return $this->state(function () {
            return [
                'lang' => 'en',
            ];
        });
    }

    public function french(): Factory
    {
        return $this->state(function () {
            return [
                'lang' => 'fr',
            ];
        });
    }
}
