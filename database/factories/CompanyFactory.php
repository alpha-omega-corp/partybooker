<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyMedia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyFactory>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'slug' => $this->faker->slug,
            'lat' => $this->faker->latitude,
            'lon' => $this->faker->longitude,
            'loc' => $this->faker->countryCode,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'fax' => $this->faker->phoneNumber,
            'logo' => $this->faker->imageUrl(),
            'company_media_id' => CompanyMedia::factory(),
        ];
    }
}
