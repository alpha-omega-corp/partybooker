<?php

namespace Database\Factories;

use App\Models\EventPlace;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EventPlace>
 */
class EventPlaceFactory extends Factory
{
    protected $model = EventPlace::class;

    public function definition(): array
    {
        return [
            'working_days' => '["mon", "tue", "wed", "thu", "fri", "sat", "sun"]',
            'opening' => '8:00',
            'closing' => '23:00',
            'working_time' => '[{"open":"08:00","close":"18:00","description":null}]',
            'holidays' => '21 décembre au 6 janvier',
            'extansion' => 0,
            'ext_true' => 'Upon request',
            'price_for' => 'space_rental_price_per_hour',
            'other_price' => 'Menu par pers. plus location salle',
            'paymeny' => '["cash","invoice","ec-direct","postfinance","visa","american"]',
            'deposit' => 'A Discuter',
            'coctail' => 300,
            'banquet' => 300,
            'outdoor' => 300,
            'sitting' => '55',
            'car' => '432',
            'room' => [
                [
                    'name' => 'Queens Meeting Room',
                    'capacity' => '10',
                ],
                [
                    'name' => 'Boardroom Meeting Room',
                    'capacity' => '30',
                ],
                [
                    'name' => 'Speaker Room',
                    'capacity' => '150',
                ],
            ],
            'reduced_mob' => 1,
            'facilities' => '["bar","dance-floor","lighting"]',
            'oth_facilities' => 'Vue exceptionnelle sur le lac et les Alpes',
            'convenience' => '["cloakrooms","bathrooms"]',
            'alcohole' => 1,
            'alcohole_yes' => 'CHF 20.- / bouteille de vin. Autres alcools, prix du droit de bouchon sur demande.',
            'meals' => 'no',
            'affiliate_caterer' => 1,
            'yes_af_caterers' => '[{"name":"Genecand Traiteur","url":"https:\/\/www.genecand.ch"},{"name":"Hotel President Wilson","url":"https:\/\/www.le-traiteur.ch"},{"name":"RSH Traiteur","url":"https:\/\/www.rsh-traiteur.ch"},{"name":"Artisan Cuisinier","url":"https:\/\/www.lartisancuisinier.ch"},{"name":"Audibert Catering","url":"https:\/\/audibertcatering.ch\/"}]',
            'free_caterer' => 'yes',
            'yes_free_caterers' => '[]',
            'ext_food' => 'yes',
            'furniture' => '["tables","chairs","kitchen","warm-up","refrigerator"]',
            'equipment' => '["sound","projector","screen","microphone"]',
            'other_eq' => null,
            'staff' => '["waiter","barman","cleaning"]',
            'other_staff' => null,
            'accomodation' => 'yes-nearby',
            'number_questrooms' => '13',
            'other_services' => '["decoration","photographer","music","transport"]',
            'more_services' => null,
            'comment' => 'Commentaire',
            'price' => "5000",
            'budget' => '30000',
        ];
    }
}
