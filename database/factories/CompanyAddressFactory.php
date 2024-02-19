<?php

namespace Database\Factories;

use App\Models\CompanyAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyAddress>
 */
class CompanyAddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'lat' => $this->faker->latitude,
            'lon' => $this->faker->longitude,
            'loc' => $this->faker->countryCode,
            'address' => $this->faker->address,
        ];
    }
}
