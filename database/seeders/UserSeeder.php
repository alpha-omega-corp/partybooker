<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->count(50)
            ->create();

        User::factory([
            'email' => 'bleyo@alphomega.org',
            'name' => 'Nicholas',
            'is_admin' => true,
        ])->create();
    }
}
