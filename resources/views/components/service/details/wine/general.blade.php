@php use App\Helpers\FurnitureTranslatorHelper;use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
<x-service.list>
    <x-service.details.wine.general-information :details="$details"/>
    <x-service.details.wine.general-catering :details="$details"/>
    <x-service.details.wine.general-other :details="$details"/>

    <x-service.comment :value="$details->comment"/>


</x-service.list>




