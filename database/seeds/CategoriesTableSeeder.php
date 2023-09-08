<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        // 1
		$this->newCategory('cat1', 'reception-venue', 'event-place', function() {
            return [
                'authentic',
                'estate-wine-cellar',
                'original-venue',
                'tent-rental',
                'prestigious',
                'lake-view',
                'trend',
            ];
        });

        // 2
        $this->newCategory('cat2', 'business-event', 'event-place', function() {
            return [
                'training',
                'seminar-medium',
                'conference-assembly',
                'seminar-accomodation',
                'team-building',
                'company-outing',
                'incentive',
            ];
        });

        // 3
        $this->newCategory('cat3', 'catering', 'caterer', function() {
            return [
                'local-artisan',
                'vogue',
                'world-cuisine',
                'personal-chef',
                'lunchbox',
                'delivery',
            ];
        });

        // 4
        $this->newCategory('cat4', 'wine-lovers', 'wine', function() {
            return [
                'wine-tasting',
                'activities',
                'shop',
                'guide',
            ];
        });

        // 5
        $this->newCategory('cat5', 'equipment', 'equipment', function () {
            return [
                'furniture',
                'kitchen-office',
                'audiovisual',
                'coordination',
                'table-decoration',
                'floral',
                'decoration',
            ];
        });

         // 6
         $this->newCategory('cat6', 'entertainment', 'entertainment', function () {
            return [
                'animation',
                'dj-musiciens',
                'artists',
                'costumes',
                'activities',
            ];
        });


        $this->newLocale(1, 'en', 'reception-venue', 'Reception Venue');
        $this->newLocale(1, 'fr', 'salle-de-reception', 'Location Salle');

        $this->newLocale(2, 'en', 'authentic', 'Authentic');
        $this->newLocale(2, 'fr', 'authentique', 'Authentique');

        $this->newLocale(3, 'en', 'estate-wine-cellar', 'Estate & Wine Cellar');
        $this->newLocale(3, 'fr', 'domaine-caveau', 'Domaine et caveau');

        $this->newLocale(4, 'en', 'original-venue', 'Original Venue');
        $this->newLocale(4, 'fr', 'lieu-original', 'Lieu Original');

        $this->newLocale(5, 'en', 'tent-rental', 'Tent rental');
        $this->newLocale(5, 'fr', 'location-tente', 'Location de tente');

        $this->newLocale(6, 'en', 'prestigious', 'Prestigious');
        $this->newLocale(6, 'fr', 'prestigieux', 'Prestigieux');

        $this->newLocale(7, 'en', 'lake-view', 'Lake View');
        $this->newLocale(7, 'fr', 'vue-lac', 'Vue lac');

        $this->newLocale(8, 'en', 'trend', 'Trend');
        $this->newLocale(8, 'fr', 'tendance', 'Tendance');

        $this->newLocale(9, 'en', 'business-event', 'Business Event');
        $this->newLocale(9, 'fr', 'evenement-professionnel', 'Evènement Professionel');

        $this->newLocale(10, 'en', 'meeting', 'Training, Meeting, Seminar "Small"');
        $this->newLocale(10, 'fr', 'reunion', 'Formation, réunion, séminaire "Petit"');

        $this->newLocale(11, 'en', 'seminar-medium', 'Seminar "Medium"');
        $this->newLocale(11, 'fr', 'seminaire-moyen', 'Séminaire "Moyen"');

        $this->newLocale(12, 'en', 'conference-assembly', 'Conference & Assembly');
        $this->newLocale(12, 'fr', 'conference-assemblee', 'Conférence et Assemblée');

        $this->newLocale(13, 'en', 'seminar-accomodation', 'Seminar with accomodation');
        $this->newLocale(13, 'fr', 'seminaire-hebergement', 'Séminaire avec hébergement');

        $this->newLocale(14, 'en', 'team-building', 'Team Building');
        $this->newLocale(14, 'fr', 'team-building', 'Team Building');

        $this->newLocale(15, 'en', 'company-outing', 'Company Outing');
        $this->newLocale(15, 'fr', 'sortie-entreprise', 'Sortie d\'entreprise');

        $this->newLocale(16, 'en', 'incentive', 'Incentive');
        $this->newLocale(16, 'fr', 'incentive', 'Incentive');

        $this->newLocale(17, 'en', 'catering', 'Caterer');
        $this->newLocale(17, 'fr', 'traiteur', 'Traiteur');

        $this->newLocale(18, 'en', 'local-artisan', 'Local Artisan');
        $this->newLocale(18, 'fr', 'artisan-local', 'Artisan locale');

        $this->newLocale(19, 'en', 'vogue', 'Vogue');
        $this->newLocale(19, 'fr', 'en-vogue', 'En Vogue');

        $this->newLocale(20, 'en', 'world-cuisine', 'World Cuisine');
        $this->newLocale(20, 'fr', 'cuisine-monde', 'Cuisine du monde');

        $this->newLocale(21, 'en', 'personal-chef', 'Personal Chef');
        $this->newLocale(21, 'fr', 'chef-domicile', 'Chef à domicile');

        $this->newLocale(22, 'en', 'lunchbox', 'Catering, LunchBox');
        $this->newLocale(22, 'fr', 'lunchbox', 'Traiteur, LunchBox');

        $this->newLocale(23, 'en', 'delivery', 'Delivery Service');
        $this->newLocale(23, 'fr', 'livraison', 'Service de livraison');

        $this->newLocale(24, 'en', 'wine-lovers', 'Wine lovers');
        $this->newLocale(24, 'fr', 'amoureux-vin', 'Amoureux du vin');

        $this->newLocale(25, 'en', 'wine-tasting', 'Wine Tasting');
        $this->newLocale(25, 'fr', 'degustation-vins', 'Dégustation de vins');

        $this->newLocale(26, 'en', 'activities', 'Activities');
        $this->newLocale(26, 'fr', 'activities', 'Activités');

        $this->newLocale(27, 'en', 'shop', 'Shop & Winebar');
        $this->newLocale(27, 'fr', 'boutique-bar-a-vin', 'Biztuqze et Var à vin');

        $this->newLocale(28, 'en', 'guide', 'Guide');
        $this->newLocale(28, 'fr', 'guide', 'Guide');

        $this->newLocale(29, 'en', 'equipment', 'Equipment & Decoration');
        $this->newLocale(29, 'fr', 'materiel-deco', 'Matériel & Déco');

        $this->newLocale(30, 'en', 'furniture', 'Furniture');
        $this->newLocale(30, 'fr', 'mobilier', 'Mobilier');

        $this->newLocale(31, 'en', 'kitchen-office', 'Kitchen & Office');
        $this->newLocale(31, 'fr', 'cuisine-office', 'Cuisine et Office');

        $this->newLocale(32, 'en', 'audiovisual', 'Audiovisual');
        $this->newLocale(32, 'fr', 'audio-visuel', 'Audio-visuel');

        $this->newLocale(33, 'en', 'coordination', 'Preparation & Coordination');
        $this->newLocale(33, 'fr', 'coordination', 'Préparation et coordination');

        $this->newLocale(34, 'en', 'table-decoration', 'Table Decoration');
        $this->newLocale(34, 'fr', 'art-de-la-table', 'Art de la Table');

        $this->newLocale(35, 'en', 'floral', 'Floral Arrangement');
        $this->newLocale(35, 'fr', 'fleurs', 'Fleurs');

        $this->newLocale(36, 'en', 'decoration', 'Decoration');
        $this->newLocale(36, 'fr', 'decoration', 'Décoration');

        $this->newLocale(37, 'en', 'entertainment', 'Entertainment');
        $this->newLocale(37, 'fr', 'animations', 'Animation');

        $this->newLocale(38, 'en', 'animation', 'Animation');
        $this->newLocale(38, 'fr', 'animation', 'Animation');

        $this->newLocale(39, 'en', 'dj-musiciens', 'DJ, musiciens');
        $this->newLocale(39, 'fr', 'dj-musiciens', 'DJ, musiciens');

        $this->newLocale(40, 'en', 'artists', 'Artists & Show');
        $this->newLocale(40, 'fr', 'artistes', 'Artistes & Spectacle');

        $this->newLocale(41, 'en', 'costumes', 'Costumes');
        $this->newLocale(41, 'fr', 'deguisement', 'Déguisement');

        $this->newLocale(42, 'en', 'activities', 'Activities');
        $this->newLocale(42, 'fr', 'activites', 'Activités');
    }

    private function newCategory(string $code, string $slug, string $form_name, \Closure $cb) {
        $id = DB::table('categories')->insertGetId([
            'code' => $code,
            'slug' => $slug,
            'form_name' => $form_name
        ]);

        foreach ($cb() as $key => $subCat) {
            $key = $key + 1;
            $c = $code . '_' . $key;
            DB::table('categories')->insert([

                'parent_id' => $id,
                'code' => $c,
                'slug' => $subCat,
                'form_name' => $form_name
            ]);
        }
    }


    private function newLocale(int $id, string $locale, string $slug, string $name, ?string $title = null, ?string $md = null, ?string $keywords = null, ?string $description = null) {
        DB::table('category_locales')->insert([
            'categories_id' => $id,
            'lang' => $locale,
            'slug' => $slug,
            'name' => $name,
            'meta_title' => $title,
            'meta_description' => $md,
            'meta_keywords' => $keywords,
            'description' => $description
        ]);
    }
}
