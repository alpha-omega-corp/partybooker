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

        $this->newPartner('dynam-event', 1);
        $this->newPartner('chillfood', 2);
        $this->newPartner('la-cave-geneve-vieille-ville', 3);
        $this->newPartner('moulin-du-creux-vich', 4);
        $this->newPartner('chateau-de-coppet', 5);
        $this->newPartner('twist-events-carouge-geneve', 6);
        $this->newPartner('domaine-la-capitaine', 7);
        $this->newPartner('domaine-des-esserts', 8);
        $this->newPartner('la-caravane-passe-geneve', 9);
        $this->newPartner('headphone-music--silent-disco', 10);





    }


    private function newPartner(string $slug, $r) {
        DB::table('partners_info')->insert([
            'id_partner' => '120036190814-044' . $r,
            'en_company_name' => $slug,
            'fr_company_name' => $slug,
            'slug' => $slug,
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
            'phone' => '+4121989889' .$r,
            'company_phone' => '+4121939889'.$r,
            'language' => '["french","english","german","italian"]',
            'price' => true,
            'budget' => true,
            'priority' => 1,
            'plan' => 'exclusif',
            'en_slogan' => 'SLogna',
            'fr_slogan' => 'SLogna',
            'en_short_descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis dolor ligula, quis commodo arcu sollicitudin eu. Phasellus feugiat nisl non ex iaculis dictum. Aliquam',
            'fr_short_descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis dolor ligula, quis commodo arcu sollicitudin eu. Phasellus feugiat nisl non ex iaculis dictum. Aliquam',
            'en_full_descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis dolor ligula, quis commodo arcu sollicitudin eu. Phasellus feugiat nisl non ex iaculis dictum. Aliquam',
            'fr_full_descr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis dolor ligula, quis commodo arcu sollicitudin eu. Phasellus feugiat nisl non ex iaculis dictum. Aliquam',
            'other_lang' => null,
        ]);

        DB::table('users')->insert([
            'name' => $slug,
            'email' => $slug . '@alphomega.org',
            'id_partner' => '120036190814-044' . $r,
            'email_verification' => 1,
            'password' => bcrypt('password'),
            'type' => 'admin',
            'provider' => null,
            'provider_id' => null,
        ]);
    }
}
