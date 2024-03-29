<?php


namespace App\Services;

use App\Enums\CategoryType;
use App\Enums\FormType;
use App\Interfaces\IAdvertService;
use App\Interfaces\IFileService;
use App\Models\Advert;
use App\Models\AdvertFile;
use App\Models\AdvertForm;
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
    }

    private function getChecklist(FormType $type): Collection
    {
        return $this->advert->service->forms()
            ->ofType($type)
            ->get();
    }

    public function loadCaterer(array &$data): void
    {
        $this->loadSchedule($data);
        $this->loadRates($data);

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
    }


    private function loadSchedule(array &$data): void
    {
        $schedule = $this->advert->service->schedule;
        foreach ($schedule->days as $item) {
            $data['is_open_' . $item->day] = $item->is_open;
            $data['timetable_' . $item->day] = $item->timetable;
        }

        $data['has_extension'] = $schedule->has_extension;
        $data['extension_description'] = $schedule->extension_description;
        $data['holidays'] = $schedule->holidays;
    }

    private function loadRates(array &$data): void
    {
        $data['prices'] = $this->advert->service->rate->prices;
        $data['budget'] = $this->advert->service->rate->budget;
        $data['has_deposit'] = $this->advert->service->rate->has_deposit;
        $data['deposit_description'] = $this->advert->service->rate->deposit_description;
        $data['payments'] = $this->payments
            ->pluck('id')
            ->toArray();
    }

    public function submit(array $data, CategoryType $type): bool
    {
        $this->data = $data;
        $this->updateSchedule();
        $this->updateRates();

        switch ($type) {
            case CategoryType::CATERER:
                $this->updateCaterer();
                break;
            case CategoryType::EVENT:
                // TODO: 3
                break;
            case CategoryType::ENTERTAINMENT:
                // TODO: 4
                break;
            case CategoryType::WINE:
                // TODO: 5
                break;
            case CategoryType::EQUIPMENT:
                // TODO: 6

            default:
                break;
        }

        $this->updateChecklist($this->payments, $data['payments']);
        $this->updateChecklist($this->decorations, $data['decorations']);
        $this->updateChecklist($this->dishes, $data['dishes']);
        $this->updateChecklist($this->furniture, $data['furniture']);
        $this->updateChecklist($this->kitchen, $data['kitchen']);
        $this->updateChecklist($this->staff, $data['staff']);
        $this->updateChecklist($this->delivery, $data['delivery']);

        return true;
    }

    private function updateSchedule(): void
    {
        $schedule = $this->advert->service->schedule;
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
        $rate = $this->advert->service->rate;

        $rate->update([
            'prices' => $this->data['prices'],
            'budget' => $this->data['budget'],
            'has_deposit' => $this->data['has_deposit'],
            'deposit_description' => $this->data['has_deposit']
                ? $this->data['deposit_description']
                : null,
        ]);
    }

    private function updateCaterer(): void
    {
        foreach ($this->data['menuFiles'] as $file) {
            $path = $this->fileService->advertMenu($file);

            AdvertFile::create([
                'advert_service_id' => $this->advert->service->id,
                'path' => $path,
            ]);
        }
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
}
