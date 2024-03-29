<?php

namespace Database\Factories;

use App\Models\AdvertScheduleDay;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdvertScheduleDayFactory>
 */
class AdvertScheduleDayFactory extends Factory
{
    protected $model = AdvertScheduleDay::class;

    public function definition(): array
    {
        return [
            'is_open' => $this->faker->boolean,
            'timetable' => function (array $attributes) {
                return $attributes['is_open'] ? [
                    [
                        'open' => '08:00',
                        'close' => '12:00',
                    ],
                    [
                        'open' => '13:00',
                        'close' => '17:00',
                    ],
                ] : null;
            },
        ];
    }
}
