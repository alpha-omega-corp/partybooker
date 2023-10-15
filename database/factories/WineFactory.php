<?php

namespace Database\Factories;

use App\Models\Wine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Wine>
 */
class WineFactory extends Factory
{
    protected $model = Wine::class;

    public function definition(): array
    {
        return [
            'working_days' => '["mon", "tue", "wed", "thu", "fri", "sat", "sun"]',
            'opening' => '8:00:00',
            'closing' => '23:00:00',
            'opening_upon' => true,
            'holidays' => '21 décembre au 6 janvier',
            'extansion' => true,
            'ext_true' => 'Upon request',
            'price_for' => 'fixed_price_per_person',
            'other_price' => null,
            'paymeny' => '["invoice"]',
            'other_payment' => 'Upon request',
            'deposit' => 'Acompte de 50% à la commande, solde à 10 jours net',
            'service' => json_encode([
                [
                    'name' => 'DEGUSTATION DIDACTIQUE',
                    'description' => "D\u00e9couverte de trois vins suisse insoup\u00e7onn\u00e9es et rares aux c\u00f4t\u00e9s d'un expert. Une carte g\u00e9ante du vignoble et un guide de d\u00e9gustation individuel viennent compl\u00e9ter",
                ],
                [
                    'name' => 'APERITIF GOURMAND',
                    'description' => "D\u00e9couverte de trois vins suisse insoup\u00e7onn\u00e9es et rares aux c\u00f4t\u00e9s d'un expert. Une carte g\u00e9ante du vignoble et un guide de d\u00e9gustation individuel viennent compl\u00e9ter",
                ],
            ]),
            'participant' => '["space name: lieu choisi, min: 20, max:40"]',
            'wine' => '["wine","champagne","aperitif","digestif"]',
            'affiliation' => '["name: Swisslabel, link: http:\/\/www.swisslabel.ch\/fr","name: Swisswinedirectory, link: https:\/\/www.swisswinedirectory.ch\/"]',
            'reward' => '["name: -, contest: -, reward: gold"]',
            'article' => '["wine","champagne","aperitif","digestif"]',
            'art_d' => '["wine","champagne","aperitif","digestif"]',
            'art_l' => '["wine","champagne","aperitif","digestif"]',
            'furniture' => '["tables","chairs","kitchen","warm-up","refrigerator"]',
            'other_furniture' => 'Upon request',
            'equipment' => '["sound","projector","screen","microphone"]',
            'other_equipment' => 'Upon request',
            'food_on_site' => 1,
            'yes_food' => '["wine","champagne","aperitif","digestif"]',
            'catering' => 1,
            'caterer_aff' => 1,
            'caterers_aff' => '["wine","champagne","aperitif","digestif"]',
            'comment' => 'Upon request',
        ];
    }
}
