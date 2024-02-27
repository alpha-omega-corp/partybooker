<?php

namespace Database\Factories;

use App\Models\AdvertLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdvertLocale>
 */
class AdvertLocaleFactory extends Factory
{
    protected $model = AdvertLocale::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(10),
            'name' => $this->faker->name,
            'keywords' => $this->faker->randomElements([
                'keyword1',
                'keyword2',
                'keyword3',
                'keyword4',
                'keyword5',
            ], 3),
        ];
    }
}
