<?php

namespace Database\Seeders;

use App\Models\AppFaq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        AppFaq::factory()
            ->count(10)
            ->create();
    }
}
