<?php

namespace Database\Factories;

use App\Models\ListingSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ListingSchedule>
 */
class ListingScheduleFactory extends Factory
{
    protected $model = ListingSchedule::class;

    public function definition(): array
    {
        return [
            'timetable_specs' => [
                [
                    'name' => 'Monday',
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                [
                    'name' => 'Wednesday',
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                [
                    'name' => 'Thursday',
                    'start' => '09:00',
                    'end' => '18:00',
                ],
                [
                    'name' => 'Friday',
                    'start' => '09:00',
                    'end' => '18:00',
                ],
            ],
            'holiday_specs' => [
                [
                    'name' => 'Christmas',
                    'start' => now()->toString(),
                    'end' => now()->addDay()->toString(),
                ],
                [
                    'name' => 'New Year',
                    'start' => now()->addDay()->toString(),
                    'end' => now()->addDays(2)->toString(),
                ],
            ],
            'extension_specs' => function () {
                return $this->faker->boolean ? [
                    [
                        'name' => 'Weekend',
                        'description' => 'Weekend extension',
                    ]
                ] : null;
            },
        ];
    }
}
