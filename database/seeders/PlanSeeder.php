<?php

namespace Database\Seeders;

use App\Models\AppPlan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        AppPlan::factory()
            ->standard()
            ->create();
        
        AppPlan::factory()
            ->premium()
            ->create();

        AppPlan::factory()
            ->exclusive()
            ->create();
    }
}
