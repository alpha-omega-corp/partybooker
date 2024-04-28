<?php

namespace Database\Seeders;

use App\Models\AppAbout;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        AppAbout::factory()
            ->features()
            ->count(10)
            ->create();

        AppAbout::factory()
            ->benefits()
            ->count(3)
            ->create();
    }
}
