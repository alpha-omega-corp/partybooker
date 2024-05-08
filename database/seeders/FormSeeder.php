<?php

namespace Database\Seeders;

use App\Models\AppForm;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    public function run(): void
    {
        AppForm::factory()->payments()->create();
        AppForm::factory()->furniture()->create();
        AppForm::factory()->staff()->create();
        AppForm::factory()->decoration()->create();
        AppForm::factory()->dishes()->create();
        AppForm::factory()->installations()->create();
        AppForm::factory()->technical()->create();
        AppForm::factory()->kitchen()->create();
        AppForm::factory()->delivery()->create();
        AppForm::factory()->food()->create();
        AppForm::factory()->serviceCaterer()->create();
        AppForm::factory()->serviceEntertainment()->create();
        AppForm::factory()->serviceEquipment()->create();
        AppForm::factory()->serviceEvent()->create();
        AppForm::factory()->serviceWine()->create();
    }
}
