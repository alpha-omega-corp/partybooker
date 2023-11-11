<?php

namespace App\Interfaces;

use Filament\Forms\Components\Fieldset;

interface IFormService
{
    public function PaymentFieldset(): Fieldset;

}
