<?php

namespace Database\Seeders;

use App\Models\AppPost;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        AppPost::factory()
            ->count(10)
            ->create();
    }
}
