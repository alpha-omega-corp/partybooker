<?php

namespace App\Interfaces;

use App\Enums\FormType;
use Filament\Forms\Components\Section;
use Illuminate\Support\Collection;

interface IFormService
{
    public function price(): Section;

    public function schedule(): Section;

    public function comment(): Section;

    public function caterer(): Section;

    public function getFormOptions(FormType $type): Collection;


}
