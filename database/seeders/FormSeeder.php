<?php

namespace Database\Seeders;

use App\Models\AppForm;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    public function run(): void
    {
        AppForm::factory()
            ->payments()
            ->create();

        AppForm::factory()
            ->furniture()
            ->create();

        AppForm::factory()
            ->equipment()
            ->create();

        AppForm::factory()
            ->staff()
            ->create();

        AppForm::factory()
            ->decoration()
            ->create();

        AppForm::factory()
            ->dishes()
            ->create();

        AppForm::factory()
            ->installations()
            ->create();

        AppForm::factory()
            ->kitchen()
            ->create();

        AppForm::factory()
            ->delivery()
            ->create();
    }
}
