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
            'opening' => '09:00:00',
            'closing' => '18:00:00',
            'holidays' => null,
            'extansion' => true,
            'ext_true' => 'Tous les jours',
            'price_for' => 'other',
            'other_price' => 'Nombre de pièce',
            'paymeny' => '["invoice"]',
            'other_payment' => null,
            'deposit' => 'Acompte et garantie demandés.',
            'delivery' => 'Selon devis',
            'expences' => 'Mise en place du mobilier sur demande.',
            'geo' => 'Europe',
            'complim_services' => 'Installation sur demande',
            'proposed' => 'Tout le nécessaire pour décoration, matériel et mobilier événement',
            'references' => null,
            'comment' => 'Propositions de "Mises en scènes". Offres mini prix. Cahier de tendances pour vous inspirer.',
        ];
    }
}
