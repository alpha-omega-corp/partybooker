<?php

namespace Database\Factories;

use App\Models\ListingDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ListingDetail>
 */
class ListingDetailFactory extends Factory
{
    protected $model = ListingDetail::class;

    public function definition(): array
    {
        return [
            'staff' => [
                'staff 1',
                'staff 2',
                'staff 3'
            ],
            'furniture' => [
                'tables',
                'chairs',
                'sofas'
            ],
            'equipment' => [
                'wifi',
                'beamer',
                'hats'
            ],
            'facilities' => [
                'kitchen',
                'garden'
            ],
            'conveniences' => [
                'toilets',
                'showers',
                'smokers area'
            ],
            'rooms' => [
                'room 1' => 10,
                'room 2' => 100,
                'room 3' => 2
            ],
            'has_handicap' => $this->faker->boolean(),
            'has_parking' => $this->faker->boolean(),
            'parking_slots' => function (array $attributes) {
                return $attributes['has_parking'] ? $this->faker->numberBetween(10, 100) : null;
            },
        ];
    }
}
