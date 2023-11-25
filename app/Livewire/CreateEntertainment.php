<?php

namespace App\Livewire;

use App\Models\Advert;
use App\Models\Entertainment;
use App\Models\PartnersInfo;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateEntertainment extends Component implements HasForms
{
    use InteractsWithForms;

    public $days;
    public $duration;
    public $holidays;
    public $extension;
    public $extensionDescription;
    public $rate;
    public $budget;
    public $rateType;
    public $deposit;
    public $travelExpenses;
    public $expensesMore;
    public $allowedPayments;
    public $allowedPaymentsMore;
    public $geoLimitations;
    public $participants;
    public $equipmentMore;
    public $noEquipmentMore;
    public $referencesMore;
    public $servicesMore;
    public $biography;
    public $comment;
    public $timetable;
    public $rateTypeOther;
    public $depositDescription;

    public $advertId;
    public $partnerId;
    public $partnerInfoId;

    public function mount(string $partnerId, int $advertId): void
    {
        $this->form->fill();
        $this->advertId = $advertId;
        $this->partnerId = $partnerId;
        $partner = PartnersInfo::where('id_partner', $this->partnerId)->first();
        $this->partnerInfoId = $partner->id;

        $advert = Advert::where('id', $this->advertId)
            ->where('partners_info_id', $this->partnerInfoId)
            ->first();

        if ($advert->status === Advert::STATUS_ACTIVE) {
            $entertainment = Entertainment::where('id', $advert->service_id)->first();
            $this->days = json_decode($entertainment->working_days);
            $this->timetable = json_decode($entertainment->working_time, true);
            $this->duration = json_decode($entertainment->duration, true);
            $this->holidays = json_decode($entertainment->holidays, true);
            $this->extension = $entertainment->extansion;
            $this->extensionDescription = $entertainment->ext_true;
            $this->rate = $entertainment->price;
            $this->budget = $entertainment->budget;
            $this->deposit = $entertainment->deposit != null ? 'yes' : 'no';
            $this->depositDescription = $entertainment->deposit;
            $this->allowedPayments = json_decode($entertainment->paymeny);
            $this->geoLimitations = $entertainment->geo;
            $this->rateType = $entertainment->price_for;
            $this->rateTypeOther = $entertainment->price_for == 'other' ? $entertainment->other_price : null;
            $this->biography = json_decode($entertainment->biography);
            $this->participants = $entertainment->participants;

            $this->allowedPaymentsMore = collect(json_decode($entertainment->other_payment, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->expensesMore = collect(json_decode($entertainment->additional_exp, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->travelExpenses = collect(json_decode($entertainment->travelling_exp, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->servicesMore = collect(json_decode($entertainment->services, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->equipmentMore = collect(json_decode($entertainment->equipment, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->noEquipmentMore = collect(json_decode($entertainment->eq_not_incl, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->referencesMore = collect(json_decode($entertainment->reference, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();

            $this->comment = $entertainment->comment;
        }
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('partner.working_schedule'))
                    ->columns(2)
                    ->schema([
                        (new FormService())->WorkingDays(),
                        (new FormService())->Extension(),
                        Repeater::make('duration')
                            ->columns(3)
                            ->label(__('partner.duration'))
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintIconTooltip(__('partner.duration_expl'))
                            ->schema([
                                TextInput::make('start')
                                    ->type('time')
                                    ->required(),
                                TextInput::make('end')->type('time')->required(),
                                TextInput::make('description')->type('text')->required(),
                            ]),
                        (new FormService())->Timetable(),
                        (new FormService())->Holidays(),
                    ]),

                Section::make(__('partner.rates_conditions'))
                    ->columns(2)
                    ->schema([
                        (new FormService())->Rates(),
                        (new FormService())->Budget(),
                        (new FormService())->PaymentMethods(),
                        Repeater::make('travelExpenses')
                            ->label(__('partner.travelling_expenses'))
                            ->schema([
                                TextInput::make('name')
                                    ->label(__('form.detail'))
                                    ->type('text')
                                    ->required(),
                            ]),
                        Repeater::make('expensesMore')
                            ->label(__('partner.additional_expenses'))
                            ->hintIcon('heroicon-o-information-circle')
                            ->hintIconTooltip(__('partner.additional_expenses_expl2'))
                            ->schema([
                                TextInput::make('name')
                                    ->label(__('form.detail'))
                                    ->type('text')
                                    ->required(),
                            ]),
                    ]),
                Section::make(__('partner.service_general_info'))
                    ->columns(3)
                    ->schema([
                        Fieldset::make()
                            ->schema([
                                Fieldset::make()
                                    ->columns(2)
                                    ->schema([

                                        Repeater::make('servicesMore')
                                            ->label(__('partner.complimentary_services'))
                                            ->hintIcon('heroicon-o-information-circle')
                                            ->hintIconTooltip(__('partner.complimentary_services_expl'))
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('form.detail'))
                                                    ->type('text')
                                                    ->required(),
                                            ]),
                                        RichEditor::make('biography')
                                            ->required()
                                            ->label(__('partner.biography'))
                                            ->hintIcon('heroicon-s-information-circle')
                                            ->hintIconTooltip(__('partner.biography_expl'))
                                            ->toolbarButtons([
                                                'blockquote',
                                                'bold',
                                                'bulletList',
                                                'codeBlock',
                                                'h2',
                                                'h3',
                                                'italic',
                                                'link',
                                                'orderedList',
                                                'redo',
                                                'strike',
                                                'underline',
                                                'undo',
                                            ]),
                                        TextInput::make('participants')
                                            ->numeric()
                                            ->required()
                                            ->label(__('partner.number_of_participants'))
                                            ->hint(__('partner.number_of_participants_expl')),
                                        Textarea::make('geoLimitations')
                                            ->label(__('partner.geographical_limit'))
                                            ->autosize()
                                            ->required(),

                                    ]),

                                Fieldset::make()
                                    ->columns(3)
                                    ->schema([
                                        Repeater::make('equipmentMore')
                                            ->label(__('partner.equipment_provided'))
                                            ->hintIcon('heroicon-o-information-circle')
                                            ->hintIconTooltip(__('partner.equipment_provided_expl'))
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('form.detail'))
                                                    ->type('text')
                                                    ->required(),
                                            ]),
                                        Repeater::make('noEquipmentMore')
                                            ->label(__('partner.equipment_not_included'))
                                            ->hintIcon('heroicon-o-information-circle')
                                            ->hintIconTooltip(__('partner.proposed_equipment_expl'))
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('form.detail'))
                                                    ->type('text')
                                                    ->required(),
                                            ]),

                                        Repeater::make('referencesMore')
                                            ->label(__('partner.references'))
                                            ->hintIcon('heroicon-o-information-circle')
                                            ->hintIconTooltip(__('partner.references_expl'))
                                            ->schema([
                                                TextInput::make('name')
                                                    ->label(__('form.detail'))
                                                    ->type('text')
                                                    ->required(),
                                            ]),
                                    ]),
                            ]),

                    ]),
                Section::make(__('partner.want_to_add_something'))
                    ->schema([
                        Textarea::make('comment')
                            ->required()
                            ->label(__('partner.your_comment'))
                            ->hint(__('partner.want_to_add_something_expl'))
                            ->maxLength(1024)
                    ])

            ]);
    }

    public function submit(): void
    {
        $advert = Advert::where('id', $this->advertId)
            ->where('partners_info_id', $this->partnerInfoId)
            ->first();

        $entertainment = Entertainment::where('id', $advert->service_id)->first();
        $data = $this->form->getState();

        if ($entertainment) {
            $item = $entertainment;
        } else {
            $item = new Entertainment();
        }

        $item->id_partner = $this->partnerId;
        $item->working_days = json_encode($data['days']);
        $item->working_time = json_encode($data['timetable']);
        $item->price = $data['rate'];
        $item->price_for = $data['rateType'];
        $item->budget = $data['budget'];
        $item->paymeny = json_encode($data['allowedPayments']);
        $item->other_payment = isset($data['allowedPaymentsMore']) ? json_encode(array_column($data['allowedPaymentsMore'], 'name')) : null;
        $item->holidays = json_encode($data['holidays']);
        $item->extansion = $data['extension'];
        $item->ext_true = $data['extension'] === 'yes' ? $data['extensionDescription'] : null;
        $item->deposit = $data['deposit'] === 'no' ? 'Non' : $data['depositDescription'];
        $item->geo = strip_tags($data['geoLimitations']);
        $item->other_price = $data['rateTypeOther'] ?? null;
        $item->additional_exp = isset($data['expensesMore']) ? json_encode(array_column($data['expensesMore'], 'name')) : null;
        $item->services = isset($data['servicesMore']) ? json_encode(array_column($data['servicesMore'], 'name')) : null;
        $item->equipment = isset($data['equipmentMore']) ? json_encode(array_column($data['equipmentMore'], 'name')) : null;
        $item->eq_not_incl = isset($data['noEquipmentMore']) ? json_encode(array_column($data['noEquipmentMore'], 'name')) : null;
        $item->reference = isset($data['referencesMore']) ? json_encode(array_column($data['referencesMore'], 'name')) : null;
        $item->travelling_exp = isset($data['travelExpenses']) ? json_encode(array_column($data['travelExpenses'], 'name')) : null;
        $item->biography = json_encode($data['biography']);
        $item->participants = $data['participants'];
        $item->duration = json_encode($data['duration']);
        $item->comment = $data['comment'];
        $item->save();

        $advert->status = Advert::STATUS_ACTIVE;
        $advert->service_id = $item->id;
        $item->advert()->save($advert);
    }

    public function render(): View
    {
        return view('livewire.create-entertainment');
    }
}
