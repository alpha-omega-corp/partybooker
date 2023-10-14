<?php

namespace Database\Factories;

use App\Models\Entertainment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Entertainment>
 */
class EntertainmentFactory extends Factory
{
    protected $model = Entertainment::class;

    public function definition(): array
    {
        return [
            'working_days' => '["mon","tue","wed","thu","fri"]',
            'duration' => 'Un set dure 45 minutes. Possibilité de plusieurs sets possibles.',

            'opening' => '20:00:00',
            'closing' => '02:00:00',
            'holidays' => null,
            'price_for' => 'other',
            'other_price' => '4x CHF 0,70 / km pour événements privés (avec 1 RDV compris);2x CHF 0,70 / km pour prestation DJ seule;Le nombre de km est calculé depuis Villeneuve (FR)',
            'extansion' => 'yes',
            'ext_true' => 'Tout le matériel nécessaire est fourni.',
            'paymeny' => '["cash","postfinance","visa","american"]',
            'other_payment' => null,
            'deposit' => 'Acompte de 30% à la réservation. Solde à la fin de la prestation.',
            'travelling_exp' => 'Inclus dans le prix',
            'additional_exp' => 'CHF 100.- / heure supplémentaire',
            'geo' => 'Suisse',
            'services' => 'Nous sommes les spécialistes de la silent-disco en Suisse',
            'participants' => 200,
            'equipment' => 'Casques sans fil, émetteurs, câbles, adaptateurs, etc.',
            'eq_not_incl' => 'L’infrastructure compatible avec la cuisson au feu de bois. Les boissons et la TVA',
            'biography' => 'Headphone Music / silent-disco.com est un service de la société événementielle Miss Camping SA',
            'reference' => 'Montreux Jazz Festival; Mariages et anniversaires privés; Brasserie de Montbenon à Lausanne; Musée Olympique de Lausanne; Festival Numerik Games à Yverdon; Bô Nouvel-an à Lausanne ; Silent-disco à la Piscine de Pully; Hôtel Président Wilson à Genève; Silent-disco à la Patinoire de Morges et de Nyon, etc...',
            'comment' => 'Rendez-vous sur silent-disco.com pour connaître notre agenda de soirées publiques organisées aux quatre coins de la Suisse.'
        ];
    }
}
