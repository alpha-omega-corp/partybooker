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

    @if($details->outdoor)
        <x-service.list-item :title="__('partner.outdoor_facility')">
            <p>{{$details->outdoor}}</p>
        </x-service.list-item>
    @endif

    @if($details->sitting)
        <x-service.list-item :title="__('partner.sitting_schema')">
            <div class="d-flex">
                @foreach(json_decode($details->sitting) as $sitting)
                    <p>{{$sitting}} @svg('heroicon-o-user-group', 'room-icon') </p>
                @endforeach
            </div>
        </x-service.list-item>
    @endif

    @if($details->room)
        <x-service.list-item :title="__('partner.conference_room')">
            <div class="d-flex flex-column">
                @foreach($details->room as $key => $room)
                    <div class="d-flex flex-column">
                        <div>{{$room['name']}}</div>
                        <p>@svg('heroicon-o-user-group', 'room-icon') {{strtolower($room['capacity'])}} </p>
                    </div>
                @endforeach
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
        @if(isset($details->convenience))
            <p>
                @foreach(json_decode($details->convenience) as $convenience)
                    <span class="d-flex flex-column">
                        {{ConveniencesTranslatorHelper::translate($convenience)}}
                    </span>
                @endforeach
            </p>

        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.Bar_dance_floor_stage')">
        @if(isset($details->facilities))
            <p>
                @foreach (json_decode($details->facilities) as $facilities)
                    <span class="d-flex flex-column">
                        {{BarDanceFloorTranslatorHelper::translate($facilities)}}
                    </span>
                @endforeach
            </p>
        @endif

    </x-service.list-item>

    <x-service.list-item :title="__('partner.bring_alcohol')">
        <div class="d-flex">
            <x-service.list-bool :value="$details->alcohole"/>
            <p class="alcohol_yes">{{SimpleTranslateHelper::translate($details->alcohole_yes)}}</p>
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

            <p>
                @foreach(json_decode($details->yes_af_caterers) as $caterer)
                    @if($caterer->name > 0)
                        <a href="{{$caterer->url ?? "#"}}" target="_blank">{{$caterer->name}}</a><br>
                    @endif
                @endforeach
            </p>
        </x-service.list-item>
    @endif

    <x-service.list-item :title="__('partner.free_choice_of_caterer')">

        <div class="d-flex">
            <x-service.list-bool :value="$details->free_caterer"/>
        </div>

        @foreach (isset($details->yes_free_caterers) ? json_decode($details->yes_free_caterers) : [] as $yes_free_caterers)
            @if (strlen($yes_free_caterers) > 0)
                {{$yes_free_caterers}}<span class="coma"><br></span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.external_food_allowed')">
        <x-service.list-bool :value="$details->external_food"/>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.available_furniture_equipment')">
        @if(isset($details->furniture))

            <p>
                @foreach(json_decode($details->furniture) as $furniture)
                    <span class="d-flex flex-column">
                       {{FurnitureTranslatorHelper::translate($furniture)}}
                    </span>
                @endforeach
            </p>

        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.technical_equipment')">
        @if(isset($details->equipment))
            <p>
                @foreach(json_decode($details->equipment) as $equipment)
                    @if (strlen($equipment) > 0)

                        <span class="d-flex flex-column">
                        {{ucfirst(TechnicalEquipmentTranslatorHelper::translate($equipment))}}
                    </span>
                    @endif
                @endforeach
            </p>
        @endif


        {{$details->other_eq ?? ''}}
    </x-service.list-item>

    <h6 class="text-uppercase">{{__('partner.other_services')}}</h6>

    <x-service.list-item :title="__('partner.staff')">
        @if(isset($details->staff))
            <p>
                @foreach(json_decode($details->staff) as $staff)
                    <span class="d-flex flex-column">
                        {{ucfirst(EventsStaffTranslatorHelper::translate($staff))}}
                    </span>
                @endforeach
            </p>
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

                        <span class="d-flex">
                            <img src="{{Vite::image('double-bed.svg')}}" class="accommodation-icon" alt="guest room">

                            <span class="p-1">{{$details->number_questrooms}}</span>
                        </span>
                    </div>
                </div>
                @break

            @case('yes')
                <x-service.list-bool :value="'yes'"/>
                <div class="d-flex">
                    <x-service.list-bool :value="'yes'"/>
                    <div class="d-flex flex-column m-1">
                        <span>Sur place</span>

                        <span class="d-flex">
                            <img src="{{Vite::image('double-bed.svg')}}" class="accommodation-icon" alt="guest room">

                            <span class="p-1">{{$details->number_questrooms}}</span>
                        </span>
                    </div>
                </div>
                @break

        @endswitch

    </x-service.list-item>

    <x-service.list-item :title="__('become_partner.other')">
        {{SimpleTranslateHelper::translate($details->transport)}}
        @if(isset($details->other_services))
            <p>
                @foreach (json_decode($details->other_services) as $other_services)
                    <span class="d-flex flex-column">
                        {{ucfirst(OtherServicesTranslatorHelper::translate($other_services))}}
                    </span>

                @endforeach
            </p>

        @endif
        {{$details->more_services ?? ''}}
    </x-service.list-item>

    @if(isset($details->comment))
        <x-service.list-item :title="__('partner.comment')">
            <p class="partner-comment"> {{$details->comment}}</p>
        </x-service.list-item>
    @endif
</x-service.list>
















