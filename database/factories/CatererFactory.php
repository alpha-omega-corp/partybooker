<?php

namespace Database\Factories;

use App\Models\Services\CatererService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CatererService>
 */
class CatererFactory extends Factory
{
    protected $model = CatererService::class;

    public function definition(): array
    {
        return [
            'price' => 100,
            'budget' => '1000 CHF',
            'holidays' => 'Samedi, dimanche et jours fériés ; fermeture du 22 décembre au 6 janvier inclus (à confirmer)',
            'price_for' => 'fixed_price_per_person',
            'paymeny' => '["cash","invoice"]',
            'other_payment' => null,
            'deposit' => 'A discuter',
            'p_terms' => 'A convenir',
            'geo' => 'La Côte et plus',
            'min_guests' => 10,
            'max_guests' => 1000,
            'smood' => 'https://www.smood.ch',
            'specialities' => '["dressage","service","nettoyagevaisselle"]',
            'menu' => '["121137190814-3243-Spoon-traiteur-chef a\u0300 domicile-livraion-suisse.pdf"]',
            'logistic' => '["emporter","livraison"]',
            'staff' => '["service-staff"]',
            'tableware' => '["plates","serving-cutlery"]',
            'furnishing' => '["cocktail-tables","buffet"]',
            'decoration' => '["towels","menu"]',
            'office' => '["refrigeration","heating-dishes","refrigerator-freezer"]',
            'other_services' => 'Nous fournissons tout type de matériel, de mobilier et d’équipements sur demande',
            'comment' => 'Propositions de "Mises en scènes". Offres mini prix. Cahier de tendances pour vous inspirer.',
        ];
    }
}
