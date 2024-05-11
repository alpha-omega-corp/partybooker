<?php


namespace App\Services;

use App\Enums\CategoryType;
use App\Enums\Days;
use App\Enums\FormType;
use App\Interfaces\IAdvertService;
use App\Interfaces\IFileService;
use App\Models\Advert;
use App\Models\AdvertFile;
use App\Models\AdvertForm;
use App\Models\AdvertScheduleDay;
use Illuminate\Database\Eloquent\Collection;

class AdvertService implements IAdvertService
{
    private Advert $advert;
    private array $data;
    private IFileService $fileService;

    private Collection $payments;
    private Collection $decorations;
    private Collection $dishes;
    private Collection $furniture;
    private Collection $kitchen;
    private Collection $staff;
    private Collection $delivery;
    private Collection $installations;
    private Collection $food;
    private Collection $technical;
    private Collection $caterer;
    private Collection $wine;
    private Collection $event;
    private Collection $entertainment;
    private Collection $equipment;


    public function __construct(Advert $advert)
    {
        $this->advert = $advert;
        $this->fileService = new FileService();

        $this->payments = $this->getChecklist(FormType::PAYMENT);
        $this->decorations = $this->getChecklist(FormType::DECORATION);
        $this->dishes = $this->getChecklist(FormType::DISH);
        $this->furniture = $this->getChecklist(FormType::FURNITURE);
        $this->kitchen = $this->getChecklist(FormType::KITCHEN);
        $this->staff = $this->getChecklist(FormType::STAFF);
        $this->delivery = $this->getChecklist(FormType::DELIVERY);
        $this->installations = $this->getChecklist(FormType::INSTALLATION);
        $this->food = $this->getChecklist(FormType::FOOD);
        $this->technical = $this->getChecklist(FormType::TECHNICAL);

        $this->wine = $this->getChecklist(FormType::SERVICE_WINE);
        $this->event = $this->getChecklist(FormType::SERVICE_EVENT);
        $this->entertainment = $this->getChecklist(FormType::SERVICE_ENTERTAINMENT);
        $this->equipment = $this->getChecklist(FormType::SERVICE_EQUIPMENT);
        $this->caterer = $this->getChecklist(FormType::SERVICE_CATERER);
    }

    private function getChecklist(FormType $type): Collection
    {
        return $this->advert->service->forms()
            ->ofType($type)
            ->get();
    }

    public function loadCaterer(array &$data): void
    {
        $this->loadCommon($data);
        $service = $this->advert->service->serviceable;

        $data['max_guests'] = $service->max_guests;
        $data['min_guests'] = $service->min_guests;
        $data['specialty'] = $service->specialty;
        $data['delivery_services'] = $service->delivery_services;

        $data['decorations'] = $this->decorations
            ->pluck('id')
            ->toArray();

        $data['dishes'] = $this->dishes
            ->pluck('id')
            ->toArray();

        $data['furniture'] = $this->furniture
            ->pluck('id')
            ->toArray();

        $data['kitchen'] = $this->kitchen
            ->pluck('id')
            ->toArray();

        $data['staff'] = $this->staff
            ->pluck('id')
            ->toArray();

        $data['delivery'] = $this->delivery
            ->pluck('id')
            ->toArray();

        $data['caterer_forms'] = $this->caterer
            ->pluck('id')
            ->toArray();
    }

    private function loadCommon(array &$data): void
    {
        $schedule = $this->advert->service->schedule;
        $rate = $this->advert->service->rate;

        foreach ($schedule->days as $item) {
            $data['is_open_' . $item->day] = $item->is_open;
            $data['timetable_' . $item->day] = $item->timetable;
        }

        $data['has_extension'] = $schedule->has_extension;
        $data['extension_description'] = $schedule->extension_description;
        $data['holidays'] = $schedule->holidays;

        $data['prices'] = $rate->prices;
        $data['budget'] = $rate->budget;
        $data['has_deposit'] = $rate->has_deposit;
        $data['deposit_description'] = $rate->deposit_description;
        $data['payments'] = $this->payments
            ->pluck('id')
            ->toArray();

        $data['comment'] = $this->advert->service->comment;
    }

    public function loadEntertainment(array &$data): void
    {
        $this->loadCommon($data);
        $service = $this->advert->service->serviceable;

        $data['max_guests'] = $service->max_guests;
        $data['min_guests'] = $service->min_guests;

        $data['entertainment_forms'] = $this->entertainment
            ->pluck('id')
            ->toArray();
    }

    public function loadEquipment(array &$data): void
    {
        $this->loadCommon($data);

        $data['delivery'] = $this->delivery
            ->pluck('id')
            ->toArray();

        $data['equipment_forms'] = $this->equipment
            ->pluck('id')
            ->toArray();
    }

    public function loadEvent(array &$data): void
    {
        $this->loadCommon($data);
        $service = $this->advert->service->serviceable;

        $data['max_guests'] = $service->max_guests;
        $data['min_guests'] = $service->min_guests;
        $data['rooms'] = $service->rooms;
        $data['caterers'] = $service->caterers;

        $data['furniture'] = $this->furniture
            ->pluck('id')
            ->toArray();

        $data['technical'] = $this->technical
            ->pluck('id')
            ->toArray();

        $data['staff'] = $this->staff
            ->pluck('id')
            ->toArray();

        $data['installations'] = $this->installations
            ->pluck('id')
            ->toArray();

        $data['food'] = $this->food
            ->pluck('id')
            ->toArray();

        $data['event_forms'] = $this->event
            ->pluck('id')
            ->toArray();

    }

    public function loadWine(array &$data): void
    {
        $this->loadCommon($data);
        $service = $this->advert->service->serviceable;

        $data['max_guests'] = $service->max_guests;
        $data['min_guests'] = $service->min_guests;

        $data['furniture'] = $this->furniture
            ->pluck('id')
            ->toArray();

        $data['decorations'] = $this->decorations
            ->pluck('id')
            ->toArray();

        $data['technical'] = $this->technical
            ->pluck('id')
            ->toArray();

        $data['staff'] = $this->staff
            ->pluck('id')
            ->toArray();

        $data['installations'] = $this->installations
            ->pluck('id')
            ->toArray();

        $data['food'] = $this->food
            ->pluck('id')
            ->toArray();

        $data['wine_forms'] = $this->wine
            ->pluck('id')
            ->toArray();
    }

    public function submit(array $data, CategoryType $type): bool
    {
        $this->data = $data;
        $this->updateSchedule();
        $this->updateRates();
        $this->updateComment();

        switch ($type) {
            case CategoryType::CATERER:
                $this->updateCaterer();
                break;
            case CategoryType::EVENT:
                $this->updateEvent();
                break;
            case CategoryType::WINE:
                $this->updateWine();
                break;
            case CategoryType::EQUIPMENT:
                $this->updateEquipment();
                break;
            case CategoryType::ENTERTAINMENT:
                $this->updateEntertainment();
                break;
            default:
                break;
        }

        return true;
    }

    private function updateSchedule(): void
    {
        $schedule = $this->advert->service->schedule;
        if ($schedule->days->isEmpty()) {
            foreach (Days::values() as $day) {
                AdvertScheduleDay::create([
                    'advert_schedule_id' => $schedule->id,
                    'day' => $day,
                ]);
            }
        }
        
        foreach ($schedule->days as $item) {
            $isOpen = $this->data['is_open_' . $item->day];
            $timetable = $this->data['timetable_' . $item->day];

            $item->update([
                'is_open' => $isOpen,
                'timetable' => $timetable,
            ]);
        }

        $hasExtension = $this->data['has_extension'];
        $extensionDescription = $this->data['extension_description'];
        $holidays = $this->data['holidays'];

        $schedule->update([
            'has_extension' => $hasExtension,
            'extension_description' => $hasExtension ? $extensionDescription : null,
            'holidays' => $holidays,
        ]);
    }

    private function updateRates(): void
    {
        $this->advert->service->rate->update([
            'prices' => $this->data['prices'],
            'budget' => $this->data['budget'],
            'has_deposit' => $this->data['has_deposit'],
            'deposit_description' => $this->data['has_deposit']
                ? $this->data['deposit_description']
                : null,
        ]);

        $this->updateChecklist($this->payments, $this->data['payments']);
    }

    private function updateChecklist(Collection $items, array $data): void
    {
        $toRemove = array_diff($items->pluck('id')->toArray(), $data);
        $serviceId = $this->advert->service->id;

        foreach ($toRemove as $id) {
            AdvertForm::where('advert_service_id', $serviceId)
                ->where('app_form_id', $id)
                ->delete();
        }

        foreach ($data as $id) {
            $item = AdvertForm::where('advert_service_id', $serviceId)
                ->where('app_form_id', $id)
                ->first();

            if (!$item) {
                AdvertForm::create([
                    'advert_service_id' => $serviceId,
                    'app_form_id' => $id,
                ]);
            }
        }
    }

    private function updateComment(): void
    {
        $this->advert->service->update([
            'comment' => $this->data['comment'],
        ]);
    }

    private function updateCaterer(): void
    {
        $this->updateChecklist($this->caterer, $this->data['caterer_forms']);
        $this->updateChecklist($this->decorations, $this->data['decorations']);
        $this->updateChecklist($this->dishes, $this->data['dishes']);
        $this->updateChecklist($this->furniture, $this->data['furniture']);
        $this->updateChecklist($this->kitchen, $this->data['kitchen']);
        $this->updateChecklist($this->staff, $this->data['staff']);
        $this->updateChecklist($this->delivery, $this->data['delivery']);
        $this->updateFile('caterer');

        $this->advert->service->serviceable->update([
            'max_guests' => $this->data['max_guests'],
            'min_guests' => $this->data['min_guests'],
            'delivery_services' => $this->data['delivery_services'],
            'specialty' => $this->data['specialty'],
        ]);
    }

    private function updateFile(string $dest): void
    {
        $file = collect($this->data['serviceFile'])->flatten()->first();

        if ($file) {
            $currentFile = $this->advert->service->files->first();
            $path = $this->fileService->advertFile($file, $dest);

            if ($currentFile) {
                $this->fileService->delete($currentFile->path);
                $currentFile->update([
                    'path' => $path,
                ]);
            } else {
                AdvertFile::create([
                    'advert_service_id' => $this->advert->service->id,
                    'path' => $path,
                ]);
            }
        }
    }

    private function updateEvent(): void
    {
        $this->updateChecklist($this->event, $this->data['event_forms']);
        $this->updateChecklist($this->furniture, $this->data['furniture']);
        $this->updateChecklist($this->technical, $this->data['technical']);
        $this->updateChecklist($this->staff, $this->data['staff']);
        $this->updateChecklist($this->installations, $this->data['installations']);
        $this->updateChecklist($this->food, $this->data['food']);

        $this->advert->service->serviceable->update([
            'max_guests' => $this->data['max_guests'],
            'min_guests' => $this->data['min_guests'],
            'rooms' => $this->data['rooms'],
            'caterers' => $this->data['caterers'],
        ]);
    }

    private function updateWine(): void
    {
        $this->updateChecklist($this->wine, $this->data['wine_forms']);
        $this->updateChecklist($this->furniture, $this->data['furniture']);
        $this->updateChecklist($this->decorations, $this->data['decorations']);
        $this->updateChecklist($this->technical, $this->data['technical']);
        $this->updateChecklist($this->staff, $this->data['staff']);
        $this->updateChecklist($this->installations, $this->data['installations']);
        $this->updateChecklist($this->food, $this->data['food']);
        $this->updateFile('wine');

        $this->advert->service->serviceable->update([
            'max_guests' => $this->data['max_guests'],
            'min_guests' => $this->data['min_guests'],
        ]);
    }

    private function updateEquipment(): void
    {
        $this->updateChecklist($this->equipment, $this->data['equipment_forms']);
        $this->updateChecklist($this->delivery, $this->data['delivery']);
        $this->updateFile('equipment');
    }

    private function updateEntertainment(): void
    {
        $this->updateChecklist($this->entertainment, $this->data['entertainment_forms']);
        $this->updateFile('equipment');

        $this->advert->service->serviceable->update([
            'max_guests' => $this->data['max_guests'],
            'min_guests' => $this->data['min_guests'],
        ]);

    }
}
