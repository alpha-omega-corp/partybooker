<?php

namespace Database\Seeders;

use App\Models\AppContent;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        AppContent::factory()->userTerms()->create();
        AppContent::factory()->serviceTerms()->create();
        AppContent::factory()->appAbout()->create();
        AppContent::factory()->appConcept()->create();
    }
}
