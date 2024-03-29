<?php

namespace Database\Factories;

use App\Enums\Days;
use App\Models\AdvertSchedule;
use App\Models\AdvertScheduleDay;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdvertSchedule>
 */
class AdvertScheduleFactory extends Factory
{
    protected $model = AdvertSchedule::class;

    public function definition(): array
    {
        return [
            'has_extension' => $this->faker->boolean,
            'extension_description' => function (array $attributes) {
                return $attributes['has_extension'] ? $this->faker->sentence : null;
            },
            'holidays' => [
                [
                    'start' => '2024-02-01',
                    'end' => '2024-02-02',
                ],
                [
                    'start' => '2025-02-01',
                    'end' => '2025-02-02',
                ]
            ],
        ];
    }

    public function configure(): AdvertScheduleFactory
    {
        return $this->afterCreating(function (AdvertSchedule $schedule) {

            foreach (Days::values() as $day) {
                AdvertScheduleDay::factory([
                    'day' => $day,
                ])
                    ->for($schedule, 'schedule')
                    ->create();
            }
        });
    }
}
