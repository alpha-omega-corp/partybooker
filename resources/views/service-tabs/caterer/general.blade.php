@php use App\Helpers\LogisticsTranslatorHelper; @endphp
@php use App\Helpers\StaffTranslatorHelper; @endphp
@php use App\Helpers\TablewareTranslatorHelper; @endphp
@php use App\Helpers\FurnishingTranslatorHelper; @endphp
@php use App\Helpers\DecorationsTranslatorHelper; @endphp
@php use App\Helpers\OfficeEquipmentTranslatorHelper; @endphp
<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.geographical_limit')">
        <p>{{$details->geo ?? "" }}</p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.min_max_guests')">
        <p>
            @svg('heroicon-o-user-group', 'max-guests-icon')
            {{$details->min_guests ?? 0 }}
            @if(isset($details->max_guests))
                {{__('partner.to')}} {{$details->max_guests ?? 0}}
            @endif
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.smood_ch_link')">
        <p>
            <a href="{{$details->smood ?? ''}}" target="_blank">{{$details->smood ?? 0}}</a>
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.specialties')">
        <x-service.ul>
            @foreach (json_decode($details->specialities) ?? [] as $speciality)
                <li>{{ucfirst($speciality)}}</li>
            @endforeach
        </x-service.ul>
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
                @if (strlen($office) > 0)
                    <li>
                        {{OfficeEquipmentTranslatorHelper::translate($office)}}
                    </li>
                @endif
            @endforeach
        </x-service.ul>

    </x-service.list-item>

    <x-service.list-item :title="__('partner.other_service_facilities')">
        <p>{{$details ? $details->other_services : ""}}</p>
    </x-service.list-item>

    <x-service.comment :value="$details->comment"/>
</x-service.list>




