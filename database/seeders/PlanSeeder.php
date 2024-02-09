<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        Plan::factory()->standard()->create();
        Plan::factory()->premium()->create();
        Plan::factory()->exclusive()->create();
    }
}
