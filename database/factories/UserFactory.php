<?php

namespace Database\Factories;

use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->email,
            'encrypted_password' => bcrypt('password'),
            'verified_at' => now()->toDateTime(),
            'admin' => false,
            'partner_id' => Partner::factory(),
        ];
    }
}

