<?php

namespace Database\Factories;

use App\Models\AppContact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AppContact>
 */
class AppContactFactory extends Factory
{
    protected $model = AppContact::class;

    public function definition(): array
    {
        return [
            'email' => 'contact@partybooker.ch',
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'facebook' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'instagram' => $this->faker->url,
            'x' => $this->faker->url,
        ];
    }
}
