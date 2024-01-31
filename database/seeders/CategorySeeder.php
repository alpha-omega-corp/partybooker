<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Models\Category;
use App\Models\CategoryChild;
use App\Models\CategoryLocale;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            CategoryType::EVENT->value => Category::factory([
                'service' => CategoryType::EVENT->value,
            ])->create(),
            CategoryType::BUSINESS->value => Category::factory([
                'service' => CategoryType::BUSINESS->value,
            ])->create(),
            CategoryType::ENTERTAINMENT->value => Category::factory([
                'service' => CategoryType::ENTERTAINMENT->value,
            ])->create(),
            CategoryType::EQUIPMENT->value => Category::factory([
                'service' => CategoryType::EQUIPMENT->value,
            ])->create(),
            CategoryType::CATERER->value => Category::factory([
                'service' => CategoryType::CATERER->value,
            ])->create(),
            CategoryType::WINE->value => Category::factory([
                'service' => CategoryType::WINE->value,
            ])->create(),
        ];

        $this->newCategory(
            $categories[CategoryType::EVENT->value],
            [
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
                ],
            ]
        );

        $this->newCategory(
            $categories[CategoryType::BUSINESS->value],
            [
                'en' => [
                    'business-event' => 'Business Event',
                    'meeting' => 'Meeting',
                    'seminar' => 'Seminar',
                ],
                'fr' => [
                    'evenement-professionnel' => 'Événement Professionnel',
                    'reunion' => 'Réunion',
                    'seminaire' => 'Séminaire',
                ],
            ]
        );

        $this->newCategory(
            $categories[CategoryType::CATERER->value],
            [
                'en' => [
                    'catering' => 'Catering',
                    'food-truck' => 'Food Truck',
                    'personal-chef' => 'Personal Chef',
                ],
                'fr' => [
                    'traiteur' => 'Traiteur',
                    'camion-nourriture' => 'Camion Nourriture',
                    'chef-domicile' => 'Chef à domicile',
                ],
            ]
        );

        $this->newCategory(
            $categories[CategoryType::WINE->value],
            [
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
                ],
            ]
        );

        $this->newCategory(
            $categories[CategoryType::EQUIPMENT->value],
            [
                'en' => [
                    'equipment' => 'Equipment & Decoration',
                    'furniture' => 'Furniture',
                    'kitchen-office' => 'Kitchen & Office',
                ],
                'fr' => [
                    'materiel-deco' => 'Matériel & Decoration',
                    'mobilier' => 'Mobilier',
                    'cuisine-office' => 'Cuisine & Office',
                ],
            ]
        );

        $this->newCategory(
            $categories[CategoryType::ENTERTAINMENT->value],
            [
                'en' => [
                    'entertainment' => 'Entertainment',
                    'musicians-dj' => 'Musicians & DJ',
                    'artists' => 'Artists & Shows',
                ],
                'fr' => [
                    'animations' => 'Animations',
                    'musicians-dj' => 'Musicians & DJ',
                    'artistes' => 'Artists & Spéctacles',
                ],
            ]
        );
    }

    private function newCategory(Category $category, array $locales): void
    {
        if (count($locales['en']) != count($locales['fr'])) {
            return;
        }

        $children = [];
        for ($i = 0; $i < count($locales['en']); $i++) {
            $children[$i] = CategoryChild::factory()->for($category)->create();
        }

        foreach ($locales as $locale => $items) {
            for ($i = 0; $i < count($items); $i++) {
                $factory = CategoryLocale::factory([
                    'categorizable_id' => $i == 0 ? $category : $children[$i - 1],
                    'categorizable_type' => $i == 0 ? Category::class : CategoryChild::class,
                    'slug' => array_keys($items)[$i],
                    'title' => array_values($items)[$i],
                ]);

                if ($locale == 'en') {
                    $factory->english()->create();
                } else {
                    $factory->french()->create();
                }
            }
        }
    }

}
