@php use App\Helpers\LogisticsTranslatorHelper; @endphp
@php use App\Helpers\StaffTranslatorHelper; @endphp
@php use App\Helpers\TablewareTranslatorHelper; @endphp
@php use App\Helpers\FurnishingTranslatorHelper; @endphp
@php use App\Helpers\DecorationsTranslatorHelper; @endphp
@php use App\Helpers\OfficeEquipmentTranslatorHelper; @endphp
@props(['details'])

<h6 class="text-uppercase">{{__('partner.other_services')}}</h6>

<x-service.list-item :title="__('partner.logistics_service')">
    @if(isset($details))
        <x-service.ul>
            @foreach (json_decode($details->logistic)??[] as $logistic)
                @if (strlen($logistic) > 0)
                    <li>{{LogisticsTranslatorHelper::translate($logistic)}}</li>
                @endif
            @endforeach
        </x-service.ul>
    @endif
</x-service.list-item>

<x-service.list-item :title="__('partner.staff')">
    @if(isset($details))
        <x-service.ul>
            @foreach (json_decode($details->staff)??[] as $staff)
                @if (strlen($staff) > 0)
                    <li>{{StaffTranslatorHelper::translate($staff)}}</li>
                @endif
            @endforeach
        </x-service.ul>
    @endif
</x-service.list-item>

<x-service.list-item :title="__('partner.tableware')">
    <x-service.ul>
        @foreach (json_decode($details->tableware)??[] as $tableware)
            @if (strlen($tableware) > 0)
                <li>{{TablewareTranslatorHelper::translate($tableware)}}</li>
            @endif
        @endforeach
    </x-service.ul>

</x-service.list-item>

<x-service.list-item :title="__('partner.furnishing_equipment')">
    <x-service.ul>
        @foreach (json_decode($details->furnishing) ?? [] as $furnishing)
            @if (strlen($furnishing) > 0)
                <li>
                    {{FurnishingTranslatorHelper::translate($furnishing)}}
                </li>
            @endif
        @endforeach
    </x-service.ul>
</x-service.list-item>

<x-service.list-item :title="__('partner.decoration_elements')">
    <x-service.ul>
        @foreach (json_decode($details->decoration) ?? [] as $decoration)
            @if (strlen($decoration) > 0)
                <li>
                    {{DecorationsTranslatorHelper::translate($decoration)}}
                </li>
            @endif
        @endforeach
    </x-service.ul>
</x-service.list-item>

<x-service.list-item :title="__('partner.office_equipment')">
    <x-service.ul>
        @foreach (json_decode($details->office) ?? [] as $office)
            @if($office != 'other')
                <li>
                    {{OfficeEquipmentTranslatorHelper::translate($office)}}
                </li>
            @endif
        @endforeach
    </x-service.ul>

    @if(json_encode($details->other_services))
        <x-service.ul>
            @foreach (json_decode($details->other_services) as $item)
                <li>
                    {{$item}}
                </li>
            @endforeach
        </x-service.ul>
    @endif
</x-service.list-item>

<x-service.comment :value="$details->comment"/>

