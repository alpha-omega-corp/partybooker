@php use App\Helpers\LogisticsTranslatorHelper; @endphp
@php use App\Helpers\StaffTranslatorHelper; @endphp
@php use App\Helpers\TablewareTranslatorHelper; @endphp
@php use App\Helpers\FurnishingTranslatorHelper; @endphp
@php use App\Helpers\DecorationsTranslatorHelper; @endphp
@php use App\Helpers\OfficeEquipmentTranslatorHelper; @endphp
<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.geographical_limit')">
        {{$details->geo ?? "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.min_max_guests')">
        {{__('partner.from')}} {{$details->min_guests ?? 0 }} @if(isset($details->max_guests))
            {{__('partner.to')}} {{$details->max_guests ?? 0}}
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.smood_ch_link')">
        <a href="{{$details->smood ?? ''}}" target="_blank">{{$details->smood ?? 0}}</a>
    </x-service.list-item>

    <h6 class="text-uppercase">{{__('partner.specialties')}}</h6>

    <x-service.list-item :title="__('partner.specialties')">
        {{$details->specialities ?? ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.menus')">
        @if (isset($details) && $details->menu)
            @foreach (json_decode($details->menu) ?? [] as $menu)
                <p><a href="{{ asset('storage/menus/'.$menu)}}" target="blank">{{$menu}}</a></p>
            @endforeach
        @endif
    </x-service.list-item>

    <h6 class="text-uppercase">{{__('partner.other_services')}}</h6>

    <x-service.list-item :title="__('partner.logistics_service')">
        @if(isset($details))
            @foreach (json_decode($details->logistic)??[] as $logistic)
                @if (strlen($logistic) > 0)
                    {{LogisticsTranslatorHelper::translate($logistic)}}<span class="coma">,&nbsp;</span>
                @endif
            @endforeach
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.staff')">
        @if(isset($details))
            @foreach (json_decode($details->staff)??[] as $staff)
                @if (strlen($staff) > 0)
                    {{StaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
                @endif
            @endforeach
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.tableware')">
        @foreach (json_decode($details->tableware)??[] as $tableware)
            @if (strlen($tableware) > 0)
                {{TablewareTranslatorHelper::translate($tableware)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.furnishing_equipment')">
        @foreach (json_decode($details->furnishing) ?? [] as $furnishing)
            @if (strlen($furnishing) > 0)
                {{FurnishingTranslatorHelper::translate($furnishing)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.decoration_elements')">
        @foreach (json_decode($details->decoration) ?? [] as $decoration)
            @if (strlen($decoration) > 0)
                {{DecorationsTranslatorHelper::translate($decoration)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.office_equipment')">
        @foreach (json_decode($details->office) ?? [] as $office)
            @if (strlen($office) > 0)
                {{OfficeEquipmentTranslatorHelper::translate($office)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.other_service_facilities')">
        {{$details ? $details->other_services : ""}}
    </x-service.list-item>

    <h6 class="text-uppercase">{{__('partner.comment')}}</h6>
    <p class="partner-comment"> {{$details->comment ?? ""}}</p>

</x-service.list>




