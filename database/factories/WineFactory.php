<?php

namespace Database\Factories;

use App\Models\Services\WineService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WineService>
 */
class WineFactory extends Factory
{
    protected $model = WineService::class;

    public function definition(): array
    {
        return [
            'price' => 100,
            'budget' => '1000 CHF',
            'working_time' => '[{"open":"12:00","close":"14:30","description":"Salle Doo"},{"open":"19:00","close":"22:45","description":"Salle Boo"}]',
            'working_days' => '["mon", "tue", "wed", "thu", "fri", "sat", "sun"]',
            'opening' => '8:00:00',
            'closing' => '23:00:00',
            'opening_upon' => 'yes',
            'holidays' => '[{"start":"2023-11-03","end":"2023-11-28"}]',
            'extansion' => 'yes',
            'ext_true' => 'Upon request',
            'price_for' => 'fixed_price_per_person',
            'other_price' => null,
            'paymeny' => '["cash","invoice","ec-direct","postfinance","visa","american","Twint"]',
            'other_payment' => 'Upon request',
            'deposit' => 'Acompte de 50% à la commande, solde à 10 jours net',
            'service' => '[{"name":"DDDD","description":"DD"}]',
            'participant' => '[{"name":"Campagne Viro","max":"100","min":"20"}]',
            'wine' => '[{"rewards":"gold","rewardName":"Epic","name":"Chabala","price":"100","description":"Meilleure vin suisse"}]',
            'affiliation' => '[{"name":"PB","url":"https:\/\/partybooker.ch\/"}]',
            'reward' => '["name: -, contest: -, reward: gold"]',
            'article' => '["wine","champagne","aperitif","digestif"]',
            'art_d' => '["wine","champagne","aperitif","digestif"]',
            'art_l' => '["wine","champagne","aperitif","digestif"]',
            'furniture' => '["tables","chairs","kitchen","warm-up","refrigerator"]',
            'other_furniture' => 'Upon request',
            'equipment' => '["sound","projector","screen","microphone"]',
            'other_equipment' => 'Upon request',
            'food_on_site' => 'yes',
            'yes_food' => 'yes',
            'catering' => 'yes',
            'caterer_aff' => '[{"name":"PB","url":"https:\/\/partybooker.ch\/"}]',
            'caterers_aff' => '[{"name":"PB","url":"https:\/\/partybooker.ch\/"}]',
            'comment' => 'Upon request',
        ];
    }
}
