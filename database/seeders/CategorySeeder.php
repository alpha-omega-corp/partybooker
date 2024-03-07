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
                    'food-truck' => 'Food Truck',
                    'personal-chef' => 'Personal Chef',
                ],
                'fr' => [
                    'traiteur' => 'Traiteur',
                    'camion-nourriture' => 'Camion Nourriture',
                    'chef-domicile' => 'Chef à domicile',
                ]
            ]
        );

        $this->newCategory(CategoryType::WINE, [
                'en' => [
                    'wine-lovers' => 'Wine Lovers',
                    'wine-tasting' => 'Wine Tasting',
                    'activities' => 'Activities',
                    'shop' => 'Wine Shop',
                ],
                'fr' => [
                    'amoureux-vin' => 'Amoureux du vin',
                    'degustation-vin' => 'Dégustation de vin',
                    'activites' => 'Activités',
                    'boutique' => 'Boutique',
                ]
            ]
        );

        $this->newCategory(CategoryType::EQUIPMENT, [
                'en' => [
                    'equipment' => 'Equipment & Decoration',
                    'furniture' => 'Furniture',
                    'kitchen-office' => 'Kitchen & Office',
                ],
                'fr' => [
                    'materiel-deco' => 'Matériel & Decoration',
                    'mobilier' => 'Mobilier',
                    'cuisine-office' => 'Cuisine & Office',
                ]
            ]
        );

        $this->newCategory(CategoryType::ENTERTAINMENT, [
                'en' => [
                    'entertainment' => 'Entertainment',
                    'musicians-dj' => 'Musicians & DJ',
                    'artists' => 'Artists & Shows',
                ],
                'fr' => [
                    'animations' => 'Animations',
                    'musicians-dj' => 'Musicians & DJ',
                    'artistes' => 'Artists & Spéctacles',
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
