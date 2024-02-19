<?php

namespace Database\Factories;

use App\Models\CompanyContact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CompanyContact>
 */
class CompanyContactFactory extends Factory
{
    public function definition(): array
    {
        return [
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'fax' => $this->faker->phoneNumber,
        ];
    }
}
