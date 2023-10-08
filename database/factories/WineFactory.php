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
            'deposit' => 'A Discuter',
            'service' => '["bar","dance-floor","lighting"]',
            'participant' => '["space name: lieu choisi, min: 20, max:40"]',
            'wine' => '["wine","champagne","aperitif","digestif"]',
            'affiliation' => '["name: Swisslabel, link: http:\/\/www.swisslabel.ch\/fr","name: Swisswinedirectory, link: https:\/\/www.swisswinedirectory.ch\/"]',
            'reward' => '["cash","invoice","ec-direct","visa","american"]',
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
