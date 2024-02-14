<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Lottery;

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
            'password' => bcrypt('password'),
            'verified_at' => now()->toDateTime(),
            'is_admin' => false,
            'partner_id' => Partner::factory(),
        ];
    }

    public function configure(): UserFactory
    {
        return $this->afterCreating(function (User $user) {
            Lottery::odds(1, 2)
                ->winner(function () use ($user) {

                    // Partnership Requests
                    Notification::factory()
                        ->partnership()
                        ->for($user)
                        ->create();

                    // Service Requests
                    Notification::factory()
                        ->service($user->partner->company->adverts->random())
                        ->for($user)
                        ->count(4)
                        ->create();

                    // Help Requests
                    Lottery::odds(1, 4)
                        ->winner(function () use ($user) {
                            Notification::factory()
                                ->for($user)
                                ->help()
                                ->create();
                        })->choose();
                })->choose();
        });
    }
}

