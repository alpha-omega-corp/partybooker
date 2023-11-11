@php use App\Helpers\LogisticsTranslatorHelper; @endphp
@php use App\Helpers\StaffTranslatorHelper; @endphp
@php use App\Helpers\TablewareTranslatorHelper; @endphp
@php use App\Helpers\FurnishingTranslatorHelper; @endphp
@php use App\Helpers\DecorationsTranslatorHelper; @endphp
@php use App\Helpers\OfficeEquipmentTranslatorHelper; @endphp

<x-service.list>
    <x-service.details.caterer.general-information :details="$details"/>
    <x-service.details.caterer.general-specialties :details="$details"/>
    <x-service.details.caterer.general-other :details="$details"/>
</x-service.list>




