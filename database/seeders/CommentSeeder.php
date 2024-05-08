<?php

namespace Database\Seeders;

use App\Models\AppComment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        AppComment::factory()
            ->count(8)
            ->create();
    }
}
