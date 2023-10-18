@php use App\Helpers\ConveniencesTranslatorHelper; @endphp
@php use App\Helpers\BarDanceFloorTranslatorHelper; @endphp
@php use App\Helpers\FurnitureTranslatorHelper; @endphp
@php use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
@php use App\Helpers\EventsStaffTranslatorHelper; @endphp
@php use App\Helpers\SimpleTranslateHelper; @endphp
@php use App\Helpers\OtherServicesTranslatorHelper; @endphp
<x-service.list>

    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    @if(isset($details->coctail))
        <x-service.list-item :title="__('partner.cocktail_reception_capacity')">
            <p>{{$details->coctail}}</p>
        </x-service.list-item>
    @endif

    @if(isset($details->banquet))
        <x-service.list-item :title="__('partner.banquet_capacity')">
            <p>{{$details->banquet}}</p>
        </x-service.list-item>
    @endif

    @if(isset($details->outdoor))
        <x-service.list-item :title="__('partner.outdoor_facility')">
            <p>{{$details->outdoor}}</p>
        </x-service.list-item>
    @endif

    @if(json_decode($details->sitting))
        <x-service.list-item :title="__('partner.sitting_schema')">
            <div class="d-flex">
                @foreach(json_decode($details->sitting) as $sitting)
                    <p>{{$sitting}} @svg('heroicon-o-user-group', 'room-icon') </p>
                @endforeach
            </div>
        </x-service.list-item>
    @endif

    @if(isset($details->room))
        <x-service.list-item :title="__('partner.conference_room')">
            <div class="d-flex flex-column">
                <x-service.ul>
                    @foreach($details->room as $key => $room)
                        <div class="d-flex flex-column">
                            <li>{{$room['name']}}</li>
                            <p>@svg('heroicon-o-user-group', 'room-icon') {{strtolower($room['capacity'])}} </p>
                        </div>
                    @endforeach
                </x-service.ul>
            </div>
        </x-service.list-item>
    @endif

    @if (isset($details->oth_facilities))
        <x-service.list-item title="{{__('partner.other_services')}}">
            <p>{{$details->oth_facilities}}</p>
        </x-service.list-item>
    @endif

    <x-service.list-item title="{{__('partner.reduced_mobility_access')}}">
        <x-service.list-bool :value="$details->reduced_mob"/>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.car_park')">
        @if(isset($details->car))
            <p>
                <img src="{{Vite::image('parking-area.svg')}}" class="parking-icon" alt="parking capacity">
                {{$details->car}}
            </p>
        @else
            <x-service.list-bool :value="false"/>
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.conveniences')">
        <x-service.ul>
            @foreach(json_decode($details->convenience) as $convenience)
                <li>{{ConveniencesTranslatorHelper::translate($convenience)}}</li>
            @endforeach
        </x-service.ul>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.Bar_dance_floor_stage')">
        @if(isset($details->facilities))
            <x-service.ul>
                @foreach (json_decode($details->facilities) as $facilities)
                    <li>
                        {{BarDanceFloorTranslatorHelper::translate($facilities)}}
                    </li>
                @endforeach
            </x-service.ul>
        @endif

    </x-service.list-item>

    <x-service.list-item :title="__('partner.bring_alcohol')">
        <div class="d-flex">
            <x-service.list-bool :value="$details->alcohole"/>
            <p class="alcohol_yes p-1">{{SimpleTranslateHelper::translate($details->alcohole_yes)}}</p>
        </div>
    </x-service.list-item>


    <h6 class="text-uppercase">{{__('partner.catering-stewardship')}}</h6>

    <x-service.list-item :title="__('partner.property_prepare_meals')">
        <div class="d-flex">
            <x-service.list-bool :value="$details->meals"/>
        </div>
    </x-service.list-item>

    @if(isset($details->yes_af_caterers))
        <x-service.list-item :title="__('partner.works_with_affiliated_partners')">

            <x-service.ul>
                @foreach(json_decode($details->yes_af_caterers) as $caterer)
                    @if($caterer->name > 0)
                        <li>
                            <a href="{{$caterer->url ?? "#"}}" target="_blank">{{$caterer->name}}</a>
                        </li>
                    @endif
                @endforeach
            </x-service.ul>

        </x-service.list-item>
    @endif

    <x-service.list-item :title="__('partner.free_choice_of_caterer')">

        <div class="d-flex">
            <x-service.list-bool :value="$details->free_caterer"/>
        </div>

        @foreach (isset($details->yes_free_caterers) ? json_decode($details->yes_free_caterers) : [] as $yes_free_caterers)
            @if (strlen($yes_free_caterers) > 0)
                {{$yes_free_caterers}}
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.external_food_allowed')">
        <x-service.list-bool :value="$details->external_food"/>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.available_furniture_equipment')">
        @if(isset($details->furniture))

            <x-service.ul>
                @foreach(json_decode($details->furniture) as $furniture)
                    <span class="d-flex flex-column">
                       <li>{{FurnitureTranslatorHelper::translate($furniture)}}</li>
                    </span>
                @endforeach
            </x-service.ul>

        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.technical_equipment')">
        @if(isset($details->equipment))
            <x-service.ul>
                @foreach(json_decode($details->equipment) as $equipment)
                    @if (strlen($equipment) > 0)
                        <li>
                            {{ucfirst(TechnicalEquipmentTranslatorHelper::translate($equipment))}}
                        </li>
                    @endif
                @endforeach
            </x-service.ul>
        @endif


        {{$details->other_eq ?? ''}}
    </x-service.list-item>

    <h6 class="text-uppercase">{{__('partner.other_services')}}</h6>

    <x-service.list-item :title="__('partner.staff')">
        @if(isset($details->staff))
            <x-service.ul>
                @foreach(json_decode($details->staff) as $staff)
                    <li>
                        {{ucfirst(EventsStaffTranslatorHelper::translate($staff))}}
                    </li>
                @endforeach
            </x-service.ul>

        @endif

        {{$details->other_staff ?? '' }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.accommodation')">

        @switch($details->accomodation)
            @case('not-available')
                <x-service.list-bool :value="'no'"/>
                @break

            @case('yes-nearby')
                <div class="d-flex">
                    <x-service.list-bool :value="'yes'"/>
                    <div class="d-flex flex-column m-1">
                        <span>A proximiter</span>

                        @if(strlen($details->number_questrooms))
                            <span class="d-flex">
                            <img src="{{Vite::image('double-bed.svg')}}" class="accommodation-icon" alt="guest room">

                            <span class="p-1">{{$details->number_questrooms}}</span>
                        </span>
                        @endif
                    </div>
                </div>
                @break

            @case('yes')
                <x-service.list-bool :value="'yes'"/>
                <div class="d-flex">
                    <x-service.list-bool :value="'yes'"/>
                    <div class="d-flex flex-column m-1">
                        <span>Sur place</span>

                        @if(strlen($details->number_questrooms))
                            <span class="d-flex">
                            <img src="{{Vite::image('double-bed.svg')}}" class="accommodation-icon" alt="guest room">

                            <span class="p-1">{{$details->number_questrooms}}</span>
                        </span>
                        @endif
                    </div>
                </div>
                @break

        @endswitch

    </x-service.list-item>

    <x-service.list-item :title="__('become_partner.other')">
        {{SimpleTranslateHelper::translate($details->transport)}}
        @if(json_decode($details->other_services))
            <x-service.ul>
                @foreach (json_decode($details->other_services) as $other_services)
                    <li>
                        {{ucfirst(OtherServicesTranslatorHelper::translate($other_services))}}
                    </li>
                @endforeach
            </x-service.ul>
        @endif
        {{$details->more_services ?? ''}}
    </x-service.list-item>

    <x-service.comment :value="$details->comment"/>

</x-service.list>
















