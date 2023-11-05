@php use App\Helpers\LogisticsTranslatorHelper; @endphp
@php use App\Helpers\StaffTranslatorHelper; @endphp
@php use App\Helpers\TablewareTranslatorHelper; @endphp
@php use App\Helpers\FurnishingTranslatorHelper; @endphp
@php use App\Helpers\DecorationsTranslatorHelper; @endphp
@php use App\Helpers\OfficeEquipmentTranslatorHelper; @endphp

<x-service.list>

    <x-service.caterer.general-information :details="$details">
        @if(isset($editGeneral))
            {{$editGeneral}}
        @endif
    </x-service.caterer.general-information>

    <x-service.caterer.general-specialties :details="$details">
        @if(isset($editSpecialties))
            {{$editSpecialties}}
        @endif
    </x-service.caterer.general-specialties>

    <x-service.caterer.general-other :details="$details">
        @if(isset($editOther))
            {{$editOther}}
        @endif
    </x-service.caterer.general-other>

</x-service.list>




