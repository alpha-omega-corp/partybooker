<?php

namespace App\Livewire;

use App\Helpers\BudgetsHelper;
use App\Helpers\DecorationsTranslatorHelper;
use App\Helpers\FurnishingTranslatorHelper;
use App\Helpers\LogisticsTranslatorHelper;
use App\Helpers\OfficeEquipmentTranslatorHelper;
use App\Helpers\PaymentMethodsTranslatorHelper;
use App\Helpers\StaffTranslatorHelper;
use App\Helpers\TablewareTranslatorHelper;
use App\Models\Advert;
use App\Models\Caterer;
use App\Models\PartnersInfo;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateCaterer extends Component implements HasForms
{
    use InteractsWithForms;

    public $holidays;
    public $budget;
    public $rates;
    public $deposit;
    public $allowedPayments;
    public $allowedPaymentsMore;
    public $maximumCapacity;
    public $geoLimitations;
    public $minimumCapacity;
    public $delivery;
    public $specialties;
    public $menuFiles;
    public $paymentTerms;
    public $logisticsValues;
    public $tablewareValues;
    public $furnishingValues;
    public $decorationsValues;
    public $officeEquipmentValues;
    public $officeEquipmentMore;
    public $staffValues;
    public $comment;

    public $paymentMethods;
    public $logistics;
    public $tableware;
    public $furnishing;
    public $decorations;
    public $staff;
    public $officeEquipment;

    public $partnerId;
    public $advertId;
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
            $caterer = Caterer::where('id', $advert->service_id)->first();
            $this->holidays = json_decode($caterer->holidays, true);
            $this->budget = $caterer->budget;
            $this->rates = $caterer->price;
            $this->deposit = $caterer->deposit;
            $this->allowedPayments = json_decode($caterer->paymeny, true);
            $this->paymentTerms = $caterer->p_terms;
            $this->geoLimitations = $caterer->geo;
            $this->minimumCapacity = $caterer->min_guests;
            $this->maximumCapacity = $caterer->max_guests;
            $this->delivery = json_decode($caterer->smood, true);
            $this->specialties = is_array(json_decode($caterer->specialities)) ? '' : json_decode($caterer->specialities);
            $this->menuFiles = json_decode($caterer->menu, true);
            $this->logisticsValues = json_decode($caterer->logistic, true);
            $this->tablewareValues = json_decode($caterer->tableware, true);
            $this->furnishingValues = json_decode($caterer->furnishing, true);
            $this->decorationsValues = json_decode($caterer->decoration, true);
            $this->officeEquipmentValues = json_decode($caterer->office, true);
            $this->staffValues = json_decode($caterer->staff, true);
            $this->comment = $caterer->comment;
            $this->allowedPaymentsMore = collect(json_decode($caterer->other_payment, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
            $this->officeEquipmentMore = collect(json_decode($caterer->other_services, true))->mapWithKeys(
                fn($item) => [$item => ['name' => $item]]
            )->toArray();
        }
    }

    public function boot(): void
    {
        $this->paymentMethods = collect(PaymentMethodsTranslatorHelper::$_methods)
            ->mapWithKeys(fn($method) => [$method => PaymentMethodsTranslatorHelper::translate($method)]);

        $this->logistics = collect(LogisticsTranslatorHelper::$_methods)
            ->mapWithKeys(fn($method) => [$method => LogisticsTranslatorHelper::translate($method)]);

        $this->tableware = collect(TablewareTranslatorHelper::$_items)
            ->mapWithKeys(fn($method) => [$method => TablewareTranslatorHelper::translate($method)]);

        $this->furnishing = collect(FurnishingTranslatorHelper::$_items)
            ->mapWithKeys(fn($method) => [$method => FurnishingTranslatorHelper::translate($method)]);

        $this->decorations = collect(DecorationsTranslatorHelper::$_items)
            ->mapWithKeys(fn($method) => [$method => DecorationsTranslatorHelper::translate($method)]);

        $this->officeEquipment = collect(OfficeEquipmentTranslatorHelper::$_items)
            ->mapWithKeys(fn($method) => [$method => OfficeEquipmentTranslatorHelper::translate($method)]);

        $this->staff = collect(StaffTranslatorHelper::$_methods)
            ->mapWithKeys(fn($method) => [$method => StaffTranslatorHelper::translate($method)]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('partner.working_schedule'))
                    ->icon('heroicon-m-shopping-bag')
                    ->schema([
                        Repeater::make('holidays')
                            ->hint(__('partner.indicate_annual_closings'))
                            ->label(__('partner.annual_holidays'))
                            ->columns(2)
                            ->schema([
                                DatePicker::make('start')
                                    ->native(false)
                                    ->required(),
                                DatePicker::make('end')
                                    ->native(false)
                                    ->required(),
                            ]),
                    ]),
                Section::make(__('partner.rates_conditions'))
                    ->columns(4)
                    ->schema([
                        TextInput::make('rates')
                            ->label(__('partner.budget_per_person'))
                            ->hint(__('partner.budget_per_person_required'))
                            ->numeric()
                            ->required(),
                        Select::make('budget')
                            ->required()
                            ->hint(__('partner.budget_per_service'))
                            ->label(__('partner.budget'))
                            ->options(BudgetsHelper::$_budgets)
                            ->native(false),
                        TextInput::make('deposit')
                            ->label(__('partner.booking_deposit'))
                            ->hint(__('partner.in_expl'))
                            ->required(),
                        TextInput::make('paymentTerms')
                            ->label(__('partner.payment_terms'))
                            ->required()
                            ->hintIcon('heroicon-s-information-circle')
                            ->hintIconTooltip(__('partner.payment_terms_expl'))
                            ->type('text'),

                        Fieldset::make()
                            ->schema([
                                CheckboxList::make('allowedPayments')
                                    ->required()
                                    ->label(__('partner.payment_methods'))
                                    ->options($this->paymentMethods)
                                    ->gridDirection('row')
                                    ->columns(4)
                                    ->reactive()
                                    ->hint(__('partner.payment_methods_expl'))
                                    ->bulkToggleable(),

                                Repeater::make('allowedPaymentsMore')
                                    ->label(__('form.detail') . ' ' . strtolower(__('partner.payment_methods')))
                                    ->reactive()
                                    ->hidden(fn(Get $get): bool => !in_array('other', $get('allowedPayments')))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.item'))
                                            ->type('text')
                                            ->required(),
                                    ]),
                            ])
                    ]),
                Section::make(__('partner.service_general_info'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('maximumCapacity')
                            ->label(ucfirst(__('partner.min_max_guests')) . ' maximum')
                            ->required()
                            ->numeric(),
                        Textarea::make('geoLimitations')
                            ->label(__('partner.geographical_limit'))
                            ->autosize()
                            ->required(),
                        TextInput::make('minimumCapacity')
                            ->label(ucfirst(__('partner.min_max_guests')) . ' minimum')
                            ->required()
                            ->numeric(),
                        Repeater::make('delivery')
                            ->label(__('partner.delivery'))
                            ->hintIcon('heroicon-s-information-circle')
                            ->hintIconTooltip(__('partner.smood_ch_link_expl'))
                            ->columns(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label(__('form.delivery-service'))
                                    ->required(),
                                TextInput::make('url')
                                    ->url()
                                    ->required(),
                            ]),
                    ]),
                Section::make(__('partner.specialties'))
                    ->columns(2)
                    ->schema([
                        RichEditor::make('specialties')
                            ->required()
                            ->label(__('partner.specialties'))
                            ->hintIcon('heroicon-s-information-circle')
                            ->hintIconTooltip(__('partner.indicate_specialties'))
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
                        FileUpload::make('menuFiles')
                            ->label(__('form.caterer-menu'))
                            ->directory('menus')
                            ->multiple()
                            ->acceptedFileTypes([
                                'pdf',
                                'doc',
                                'docx',
                                'xls',
                                'xlsx',
                                'image/*',
                            ]),

                    ]),
                Section::make(__('partner.other_services'))
                    ->columns(2)
                    ->schema([
                        Fieldset::make()
                            ->columns(4)
                            ->schema([
                                CheckboxList::make('tablewareValues')
                                    ->required()
                                    ->label(__('partner.tableware'))
                                    ->options($this->tableware)
                                    ->reactive()
                                    ->bulkToggleable(),
                                CheckboxList::make('furnishingValues')
                                    ->required()
                                    ->label(__('partner.furnishing_equipment'))
                                    ->options($this->furnishing)
                                    ->reactive()
                                    ->bulkToggleable(),
                                CheckboxList::make('staffValues')
                                    ->required()
                                    ->label(__('partner.staff'))
                                    ->options($this->staff)
                                    ->bulkToggleable(),
                                CheckboxList::make('logisticsValues')
                                    ->required()
                                    ->label(__('partner.logistics_service'))
                                    ->options($this->logistics)
                                    ->reactive()
                                    ->bulkToggleable(),
                            ]),
                        Fieldset::make()
                            ->columns(3)
                            ->schema([
                                CheckboxList::make('decorationsValues')
                                    ->required()
                                    ->label(__('partner.decoration_elements'))
                                    ->options($this->decorations)
                                    ->bulkToggleable(),

                                CheckboxList::make('officeEquipmentValues')
                                    ->required()
                                    ->label(__('partner.office_equipment'))
                                    ->options($this->officeEquipment)
                                    ->reactive()
                                    ->bulkToggleable(),
                                Repeater::make('officeEquipmentMore')
                                    ->label(__('form.detail') . ' ' . strtolower(__('partner.office_equipment')))
                                    ->reactive()
                                    ->hidden(fn(Get $get): bool => !in_array('other', $get('officeEquipmentValues')))
                                    ->schema([
                                        TextInput::make('name')
                                            ->label(__('form.item'))
                                            ->type('text')
                                            ->required(),
                                    ]),
                            ]),
                    ]),
                Section::make(__('partner.want_to_add_something'))
                    ->schema([
                        Textarea::make('comment')
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


        $caterer = Caterer::where('id', $advert->service_id)->first();
        $data = $this->form->getState();

        if ($caterer) {
            $item = $caterer;
        } else {
            $item = new Caterer();
        }

        $item->id_partner = $this->partnerId;
        $item->holidays = json_encode($data['holidays']);
        $item->price_for = 'fixed_price_per_person';
        $item->paymeny = json_encode($data['allowedPayments']);
        $item->deposit = $data['deposit'];
        $item->p_terms = $data['paymentTerms'];
        $item->geo = $data['geoLimitations'];
        $item->min_guests = $data['minimumCapacity'];
        $item->max_guests = $data['maximumCapacity'];
        $item->smood = json_encode($data['delivery']);
        $item->specialities = json_encode($data['specialties']);
        $item->menu = json_encode($data['menuFiles']);
        $item->logistic = json_encode($data['logisticsValues']);
        $item->staff = json_encode($data['staffValues']);
        $item->tableware = json_encode($data['tablewareValues']);
        $item->furnishing = json_encode($data['furnishingValues']);
        $item->decoration = json_encode($data['decorationsValues']);
        $item->office = json_encode($data['officeEquipmentValues']);
        $item->price = $data['rates'];
        $item->budget = $data['budget'];
        $item->comment = $data['comment'];
        $item->other_payment = isset($data['allowedPaymentsMore'])
            ? json_encode(array_column($data['allowedPaymentsMore'], 'name'))
            : null;
        $item->other_services = isset($data['officeEquipmentMore'])
            ? json_encode(array_column($data['officeEquipmentMore'], 'name'))
            : null;

        $item->save();

        $advert->status = Advert::STATUS_ACTIVE;
        $advert->service_id = $item->id;
        $item->advert()->save($advert);
    }

    public function render(): View
    {
        return view('livewire.create-caterer');
    }

}
