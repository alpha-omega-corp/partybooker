<?php

namespace Database\Factories;

use App\Models\CompanyLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyLocation>
 */
class CompanyLocationFactory extends Factory
{
    protected $model = CompanyLocation::class;
    
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
