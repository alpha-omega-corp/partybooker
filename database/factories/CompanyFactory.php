<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\CompanyDetail;
use App\Models\CompanySocial;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'public' => $this->faker->boolean,
            'company_detail_id' => CompanyDetail::factory(),
            'company_social_id' => CompanySocial::factory(),
        ];
    }
}
