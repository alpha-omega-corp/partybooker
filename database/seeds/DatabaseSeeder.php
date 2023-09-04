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


        DB::table('partners_info')->insert([
            'id_partner' => '120036190814-0432',
            'en_company_name' => '"DYNAM", votre partenaire pour un team building mémorable',
            'fr_company_name' => 'DYNAM',
            'slug' => 'dynam-event',
            'average_rate' => 3,
            'plans_id' => 2,
            'plan_option_group' => 2,
            'payment_status' => true,
            'public' => true,
            'payed' => '2020-09-18',
            'expiration_date' => '2024-09-18',
            'location_code' => 'VD',
            'address' => 'Rue de la Gare 19, Montreux, Suisse',
            'lat' => '46.4364302',
            'lon' => '6.911386499999935',
            'phone' => '+41219898890',
            'company_phone' => '+41219898890',
            'language' => '["french","english","german","italian"]',
            'price' => true,
            'budget' => true,
            'priority' => 1,
            'plan' => 'exclusif',
            'en_slogan' => 'SLogna',
            'fr_slogan' => 'SLogna',
            'en_short_descr' => 'Dynamn short decr',
            'fr_short_descr' => 'Dynac court descr',
            'en_full_descr' => 'Full',
            'fr_full_descr' => 'Plein',
            'other_lang' => null,
        ]);


    }
}
