<?php

namespace Database\Factories;

use App\Models\AdvertStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdvertStatistic>
 */
class AdvertStatisticFactory extends Factory
{
    protected $model = AdvertStatistic::class;

    public function definition(): array
    {
        return [
            'views' => $this->views(),
            'requests' => $this->views()
        ];
    }

    private function views(): int
    {
        return $this->faker->numberBetween(0, 1000);
    }
}
