<?php

namespace App\Livewire;


use App\Enums\CategoryType;
use App\Models\Advert;
use App\Services\AdvertService;
use App\Services\FormService;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @property mixed $form
 */
class CreateCaterer extends Component implements HasForms
{
    use InteractsWithForms;

    public Advert $advert;
    public ?array $data = [];
    private AdvertService $service;

    public function mount(Advert $advert): void
    {
        $this->advert = $advert;
        $this->form->fill();

        $this->service->loadCaterer($this->data);
    }

    public function boot(): void
    {
        $this->service = new AdvertService($this->advert);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                (new FormService())->schedule(),
                (new FormService())->price(),
                (new FormService())->caterer(),
                (new FormService())->comment(),
            ])->statePath('data');
    }

    public function submit(): void
    {
        $this->service->submit($this->data, CategoryType::CATERER);
    }

    public function render(): View
    {
        return view('livewire.caterer');
    }

}
