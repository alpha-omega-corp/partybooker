<?php

namespace Database\Factories;

use App\Models\CompanyLocale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyLocale>
 */
class CompanyLocaleFactory extends Factory
{
    protected $model = CompanyLocale::class;

    public function definition(): array
    {
        return [
            'slogan' => $this->faker->sentence(10),
            'description' => $this->faker->paragraph($this->faker->randomElement([15, 30])),
            'preview' => $this->faker->text,
            'keywords' => json_encode($this->faker->words()),
            'title' => $this->faker->sentence(3),
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
