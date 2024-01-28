<?php

namespace Database\Factories;

use App\Models\Services\Partials\ServiceSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ServiceSchedule>
 */
class ServiceScheduleFactory extends Factory
{
    protected $model = ServiceSchedule::class;

    public function definition(): array
    {
        return [
            'timetable' => [
                'Monday' => [
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                'Wednesday' => [
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                'Thursday' => [
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                'Friday' => [
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                'Saturday' => [
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                'Sunday' => [
                    'start' => '09:00',
                    'end' => '18:00',
                ],
            ],
            'holidays' => [
                [
                    'start' => '2021-12-25',
                    'end' => '2021-12-26',
                    'name' => 'Christmas',
                ]
            ],
            'has_extension' => $this->faker->randomElement([true, false]),
            'extension_specs' => function (array $attributes) {
                return $attributes['has_extension'] ? ['Extension 1', 'Extension 2'] : null;
            },
        ];
    }
}
