<?php

namespace App\Interfaces;

use Filament\Forms\Components\Section;

interface IFormService
{
    public function price(): Section;

    public function schedule(): Section;

    public function comment(): Section;

    public function caterer(): Section;


}
