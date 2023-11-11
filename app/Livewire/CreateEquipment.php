<?php

namespace App\Livewire;

use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateEquipment extends Component implements HasForms
{
    use InteractsWithForms;

    public $days;
    public $timetable;
    public $holidays;
    public $extension;
    public $extensionDescription;

    public $advertId;
    public $partnerId;
    public $workingDays;

    public function mount(int $advertId): void
    {
        $this->form->fill();
        $this->advertId = $advertId;
        $this->partnerId = auth()->user()->id_partner;
    }

    public function boot(): void
    {
        $this->workingDays = collect(['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'])
            ->mapWithKeys(fn($day) => [$day => __('days.' . $day)]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('partner.working_schedule'))
                    ->schema([
                        CheckboxList::make('days')
                            ->required()
                            ->label(__('partner.working_days'))
                            ->options($this->workingDays)
                            ->gridDirection('row')
                            ->columns(7)
                            ->bulkToggleable(),
                        Fieldset::make()
                            ->columns(2)
                            ->schema([
                                Repeater::make('timetable')
                                    ->label(__('partner.working_schedule'))
                                    ->columns(3)
                                    ->schema([
                                        TextInput::make('open')
                                            ->type('time')
                                            ->required(),
                                        TextInput::make('close')->type('time')->required(),
                                        TextInput::make('description')->type('text')->required(),
                                    ]),
                                Repeater::make('holidays')
                                    ->label(__('partner.annual_holidays'))
                                    ->columns(2)
                                    ->schema([
                                        DatePicker::make('holiday_start')
                                            ->native(false)
                                            ->required(),
                                        DatePicker::make('holiday_end')
                                            ->native(false)
                                            ->required(),
                                    ]),
                            ]),
                        Fieldset::make()
                            ->columns(2)
                            ->schema([
                                Radio::make('extension')
                                    ->required()
                                    ->label(__('partner.possibility_extend_time'))
                                    ->options([
                                        'yes' => __('form.yes'),
                                        'no' => __('form.no'),
                                    ])
                                    ->descriptions([
                                        'yes' => __('partner.possibility_extend_time_expl'),
                                    ])->reactive(),
                                TextInput::make('extensionDescription')
                                    ->label(__('partner.extansion'))
                                    ->type('text')
                                    ->hidden(fn(Get $get) => $get('extension') !== 'yes')
                                    ->reactive()
                            ])
                    ])
            ]);
    }

    public function render(): View
    {
        return view('livewire.create-equipment');
    }
}
