<?php

namespace App\Livewire;

use Filament\Forms\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateEntertainment extends Component implements HasForms
{
    use InteractsWithForms;

    public $advertId;
    public $partnerId;

    public function mount(int $advertId): void
    {
        $this->form->fill();
        $this->advertId = $advertId;
        $this->partnerId = auth()->user()->id_partner;
    }

    public function boot(): void
    {

    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('partner.working_schedule'))
                    ->schema([

                    ])
            ]);
    }

    public function render(): View
    {
        return view('livewire.create-entertainment');
    }
}
