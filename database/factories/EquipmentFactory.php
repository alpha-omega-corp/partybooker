<?php

namespace Database\Factories;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Equipment>
 */
class EquipmentFactory extends Factory
{
    protected $model = Equipment::class;
    public function definition(): array
    {
        return [
            'working_days' => '["mon", "tue", "wed", "thu", "fri", "sat", "sun"]',
            'opening' => '8:00:00',
            'closing' => '23:00:00',
            'holidays' => null,
            'extansion' => false,
            'ext_true' => 'Tout les jours',
            'price_for' => 'space_rental_price_per_hour',
            'other_price' => null,
            'paymeny' => '["invoice"]',
            'other_payment' => null,
            'deposit' => 'Acompte et garantie demandés.',
            'delivery' => 'Selon devis',
            'expences' => 'Mise en place du mobilier sur demande.',
            'geo' => 'Europe',
            'complim_services' => 'Installation sur demande',
            'proposed' => 'Tout le nécessaire pour décoration, matériel et mobilier.',
            'references' => '* 1’000m2 de tentes stretch pour l’inauguration de la Plage des Eaux-Vives, Juin 2019',
            'comment' => 'Propositions de "Mises en scènes". Offres mini prix. Cahier de tendances pour vous inspirer.',
        ];
    }
}
