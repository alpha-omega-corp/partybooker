@php use App\Helpers\ConveniencesTranslatorHelper; @endphp
@php use App\Helpers\BarDanceFloorTranslatorHelper; @endphp
@php use App\Helpers\FurnitureTranslatorHelper; @endphp
@php use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
@php use App\Helpers\EventsStaffTranslatorHelper; @endphp
@php use App\Helpers\SimpleTranslateHelper; @endphp
@php use App\Helpers\OtherServicesTranslatorHelper; @endphp
<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item title="{{__('partner.cocktail_reception_capacity')}}">
        <p>{{$details->coctail ?? ''}}</p>
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.banquet_capacity')}}">
        <p>{{$details->banquet ?? ''}}</p>
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.outdoor_facility')}}">
        <p>{{$details->outdoor ?? ''}}</p>
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.sitting_schema')}}">
        <p>{{$details->sitting ?? ''}}</p>
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.conference_room')}}">

        @if(isset($details->room))
            <ul>
                <br>
                @foreach($details->room as $key => $room)

                    <li>
                        <spanc class="fw-bold"> {{$room['name']}} </spanc>
                    </li>
                    <li>{{ucfirst(__('service.space')) . ' ' . $room['capacity'] . ' ' . __('service.people')}}</li>
                @endforeach
            </ul>

        @endif

    </x-service.list-item>

    @if (isset($details->oth_facilities))
        <x-service.list-item title="{{__('partner.other_services')}}">
            <p>{{$details->oth_facilities}}</p>
        </x-service.list-item>
    @endif

    <x-service.list-item title="{{__('partner.reduced_mobility_access')}}">
        <p>{{SimpleTranslateHelper::translate($details->reduced_mob)}}</p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.car_park')">
        <p>{{$details->car ?? ''}}</p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.conveniences')">
        @if(isset($details->convenience) && $details->convenience)
            @if ($details->convenience > 0)
                <p>{{ConveniencesTranslatorHelper::translate($details->convenience)}}</p>
            @endif
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.Bar_dance_floor_stage')">
        @foreach ( isset($details->facilities) ? json_decode($details->facilities) : [] as $facilities)
            @if (strlen($facilities) > 0)
                <p>{{BarDanceFloorTranslatorHelper::translate($facilities)}}</p>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.bring_alcohol')">
        {{SimpleTranslateHelper::translate($details->alcohole)}} {{$details->alcohole_yes}}
    </x-service.list-item>

    <h6>{{__('partner.catering-stewardship')}}</h6>

    <x-service.list-item :title="__('partner.property_prepare_meals')">
        {{SimpleTranslateHelper::translate($details->meals)}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.works_with_affiliated_partners')">
        {{$details->affiliate_caterer ? SimpleTranslateHelper::translate($details->affiliate_caterer) : ""}}
        @foreach (isset($details->yes_af_caterers) ? json_decode($details->yes_af_caterers) : [] as $yes_af_caterers)

            @if (strlen($yes_af_caterers->name) > 0 )
                <a href="{{$yes_af_caterers->url ?? "#"}}" target="_blank">{{$yes_af_caterers->name}}</a><br>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.free_choice_of_caterer')">
        {{SimpleTranslateHelper::translate($details->free_caterer)}}
        @foreach (isset($details->yes_free_caterers) ? json_decode($details->yes_free_caterers) : [] as $yes_free_caterers)
            @if (strlen($yes_free_caterers) > 0)
                {{$yes_free_caterers}}<span class="coma"><br></span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.external_food_allowed')">
        {{SimpleTranslateHelper::translate($details->ext_food)}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.available_furniture_equipment')">
        @foreach (isset($details->furniture) ? json_decode($details->furniture) : [] as $furniture)
            @if (strlen($furniture) > 0)
                {{FurnitureTranslatorHelper::translate($furniture)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.technical_equipment')">
        @foreach (isset($details->equipment) ? json_decode($details->equipment) : [] as $equipment)
            @if (strlen($equipment) > 0)
                {{TechnicalEquipmentTranslatorHelper::translate($equipment)}}<span
                    class="coma">,&nbsp;</span>
            @endif
        @endforeach

        {{$details->other_eq ?? ''}}
    </x-service.list-item>

    <h6>{{__('partner.other_services')}}</h6>

    <x-service.list-item :title="__('partner.staff')">
        @foreach (isset($details->staff) ? json_decode($details->staff) : [] as $staff)
            @if (strlen($staff) > 0)
                {{EventsStaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
        {{$details->other_staff ?? '' }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.accommodation')">
        {{SimpleTranslateHelper::translate($details->accomodation)}}
        {{$details->number_questrooms ?? ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('become_partner.other')">
        {{SimpleTranslateHelper::translate($details->transport)}}
        @if(isset($details->other_services))
            @foreach (json_decode($details->other_services) ?? [] as $other_services)
                @if (strlen($other_services) > 0)
                    {{OtherServicesTranslatorHelper::translate($other_services)}}<span
                        class="coma">,&nbsp;</span>
                @endif
            @endforeach
        @endif
        {{$details->more_services ?? ''}}
    </x-service.list-item>

    @if(isset($details->comment))
        <h6>{{__('partner.comment')}}</h6>
        <p class="partner-comment"> {{$details->comment}}</p>
    @endif


</x-service.list>
















