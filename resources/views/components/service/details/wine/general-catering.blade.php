@php use App\Helpers\FurnitureTranslatorHelper;use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
<h6 class="text-uppercase">{{__('partner.catering-stewardship')}}</h6>

<x-service.list-item :title="__('partner.property_prepare_meals')">
    <div class="d-flex">
        <x-service.list-bool :value="$details->food_on_site"/>
    </div>
</x-service.list-item>

<x-service.list-item :title="__('partner.external_food_allowed')">
    <x-service.list-bool :value="$details->yes_food"/>
</x-service.list-item>


<x-service.list-item :title="__('partner.furnishing_equipment')">
    <x-service.ul>
        @foreach (json_decode($details->furniture) as $item)
            @if($item != 'other')
                <li>
                    {{FurnitureTranslatorHelper::translate($item)}}
                </li>
            @endif
        @endforeach
        @if(json_decode($details->other_furniture))
            @foreach (json_decode($details->other_furniture) as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        @endif
    </x-service.ul>
</x-service.list-item>

<x-service.list-item :title="__('partner.equipment_provided')">
    <x-service.ul>
        @foreach (json_decode($details->equipment) as $item)
            @if($item != 'other')
                <li>
                    {{TechnicalEquipmentTranslatorHelper::translate($item)}}
                </li>
            @endif
        @endforeach
        @if(json_decode($details->other_equipment))
            @foreach (json_decode($details->other_equipment) as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        @endif
    </x-service.ul>
</x-service.list-item>

