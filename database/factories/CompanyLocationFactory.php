<?php

namespace Database\Factories;

use App\Models\CompanyLocation;
use App\Services\ListingService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyLocation>
 */
class CompanyLocationFactory extends Factory
{
    protected $model = CompanyLocation::class;

    public function definition(): array
    {
        $locations = (new ListingService())->getLocations();

        return [
            'city' => $this->faker->city,
            'state' => $locations[array_rand($locations)],
            'zip' => $this->faker->postcode,
            'address' => $this->faker->address,
            'country' => 'CH'
        ];
    }
}
