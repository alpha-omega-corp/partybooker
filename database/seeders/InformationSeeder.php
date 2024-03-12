<?php

namespace Database\Seeders;

use App\Models\AppInformation;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    public function run(): void
    {
        AppInformation::factory()
            ->count(4)
            ->create();
    }
}
