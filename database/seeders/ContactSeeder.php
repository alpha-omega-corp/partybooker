<?php

namespace Database\Seeders;

use App\Models\AppContact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        AppContact::factory()->create();
    }
}
