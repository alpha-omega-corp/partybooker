<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class
        ]);

        DB::table('settings')->insert([
            'address' => '1296 Coppet, Suisse',
            'email' => 'contact@partybooker.ch',
            'phone' => '+41 (079 8588872',
            'facebook' => 'https://www.facebook.com/partybooker.ch/',
            'linkedin' => 'https://www.linkedin.com/company/partybooker',
            'instagram' => 'https://www.instagram.com/partybooker/',
            'user_terms_en' => 'Terms en',
            'service_terms_en' => 'Services en',
            'user_terms_fr' => 'Terms fr',
            'service_terms_fr' => 'Services fr',
        ]);

        DB::table('users')->insert([
            'name' => 'Nicholas',
            'email' => 'bleyo@alphomega.org',
            'email_verification' => 1,
            'password' => bcrypt('password'),
            'type' => 'admin',
            'provider' => null,
            'provider_id' => null,
        ]);

        DB::table('users')->insert([
            'name' => 'Paul',
            'email' => 'paul@alphomega.org',
            'email_verification' => 1,
            'password' => bcrypt('password'),
            'provider' => null,
            'provider_id' => null,
        ]);


    }
}
