<?php

namespace Database\Seeders;

use App\Models\AppUsp;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UspSeeder extends Seeder
{
    public function run(): void
    {
        AppUsp::factory()
            ->count(10)
            ->sequence(fn(Sequence $sequence) => ['position' => $sequence->index])
            ->create();
    }
}
