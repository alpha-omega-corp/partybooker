<?php

namespace App\Livewire;

use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;

interface IFormService
{
    public function Stewardship(): Fieldset;

    public function StewardshipExtra(): Fieldset;

    public function TechnicalEquipment(): Fieldset;

    public function Furniture(): Fieldset;

    public function Timetable(): Repeater;

    public function Holidays(): Repeater;

    public function Budget(): Fieldset;

    public function Extension(): Fieldset;

    public function Rates(): Fieldset;

    public function WorkingDays(): Fieldset;

    public function PaymentMethods(): Fieldset;
}
