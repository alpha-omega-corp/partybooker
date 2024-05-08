<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\Language;
use App\Models\Category;
use App\Models\CategoryLocale;
use App\Models\CategoryTag;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $this->newCategory(CategoryType::EVENT, [
                'en' => [
                    'reception-venue' => 'Reception Venue',
                    'authentic' => 'Authentic',
                    'estate-wine-cellar' => 'Estate & Wine Cellar',
                    'original-venue' => 'Original Venue',
                    'tent-rental' => 'Tent rental',
                    'prestigious' => 'Prestigious',
                    'lake-view' => 'Lake view',
                    'trend' => 'Trend',
                ],
                'fr' => [
                    'salle-de-reception' => 'Salle de réception',
                    'authentique' => 'Authentique',
                    'domaine-caveau' => 'Domaine & Caveau',
                    'lieu-original' => 'Lieu Original',
                    'location-tente' => 'Location de tente',
                    'prestigieux' => 'Prestigieux',
                    'vue-lac' => 'Vue lac',
                    'tendance' => 'Tendance',
                ]
            ]
        );

        $this->newCategory(CategoryType::CATERER, [
                'en' => [
                    'catering' => 'Catering',
                    'local-artisan' => 'Local Artisan',
                    'vogue' => 'Vogue',
                    'world-cuisine' => 'World Cuisine',
                    'personal-chef' => 'Personal Chef',
                    'lunchbox' => 'Lunchbox',
                    'delivery-service' => 'Delivery Service',
                ],
                'fr' => [
                    'traiteur' => 'Traiteur',
                    'artisan-local' => 'Artisan Local',
                    'en-vogue' => 'En Vogue',
                    'cuisine-du-monde' => 'Cuisine du Monde',
                    'chef-domicile' => 'Chef à domicile',
                    'lunchbox' => 'Lunchbox',
                    'service-livraison' => 'Service de livraison',
                ]
            ]
        );

        $this->newCategory(CategoryType::WINE, [
                'en' => [
                    'wine-lovers' => 'Wine Lovers',
                    'tasting' => 'Tasting',
                    'activities' => 'Activities',
                    'shop-bar' => 'Shop & Bar',
                    'guides' => 'Guides',
                ],
                'fr' => [
                    'amoureux-vin' => 'Amoureux du vin',
                    'degustation-vin' => 'Dégustation',
                    'activites' => 'Activités',
                    'boutique-bar' => 'Boutique & Bar',
                    'guides' => 'Guides',
                ]
            ]
        );

        $this->newCategory(CategoryType::EQUIPMENT, [
                'en' => [
                    'equipment' => 'Equipment & Decoration',
                    'furniture' => 'Furniture',
                    'kitchen-office' => 'Kitchen & Office',
                    'audio-visual' => 'Audiovisual',
                    'preparation' => 'Preparation & Coordination',
                    'table-decoration' => 'Table Decoration',
                    'floral-decoration' => 'Floral Arrangement',
                    'decorative-material' => 'Decorative Material',

                ],
                'fr' => [
                    'materiel-deco' => 'Matériel & Decoration',
                    'fourniture' => 'Fourniture',
                    'cuisine-bureau' => 'Cuisine & Bureau',
                    'audio-visuel' => 'Audiovisuel',
                    'preparation' => 'Préparation & Coordination',
                    'decoration-table' => 'Décoration de table',
                    'composition-florale' => 'Composition Florale',
                    'materiaux-decoratifs' => 'Matériaux Décoratifs',
                ]
            ]
        );

        $this->newCategory(CategoryType::ENTERTAINMENT, [
                'en' => [
                    'entertainment' => 'Entertainment',
                    'musicians' => 'Musicians & DJ',
                    'shows' => 'Artists & Shows',
                    'disguise' => 'Disguises',
                    'activities' => 'Activities',
                ],
                'fr' => [
                    'animations' => 'Animations',
                    'musiciens' => 'Musiciens & DJ',
                    'spectacles' => 'Artists & Spéctacles',
                    'deguisements' => 'Déguisements',
                    'activites' => 'Activités',
                ]
            ]
        );
    }

    private function newCategory(CategoryType $type, array $locales): void
    {
        if (count($locales[Language::EN->value]) != count($locales[Language::FR->value])) {
            return;
        }

        $category = Category::factory([
            'service' => $type->value,
        ])->create();

        $tags = [];
        for ($i = 0; $i < count($locales[Language::EN->value]); $i++) {
            $tags[$i] = CategoryTag::factory()->for($category)->create();
        }

        foreach ($locales as $lang => $items) {
            for ($i = 0; $i < count($items); $i++) {
                $factory = CategoryLocale::factory([
                    'translatable_id' => $i == 0
                        ? $category
                        : $tags[$i - 1],
                    'translatable_type' => $i == 0
                        ? Category::class
                        : CategoryTag::class,
                    'slug' => array_keys($items)[$i],
                    'title' => array_values($items)[$i],
                    'keywords' => fake()->randomElements([
                        'keyword1', 'keyword2', 'keyword3', 'keyword4', 'keyword5'
                    ], 3),
                ]);

                $lang === Language::EN->value
                    ? $factory->english()->create()
                    : $factory->french()->create();
            }
        }
    }

}
