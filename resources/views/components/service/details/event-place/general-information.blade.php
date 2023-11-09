@php use App\Helpers\BarDanceFloorTranslatorHelper;use App\Helpers\ConveniencesTranslatorHelper;use App\Helpers\SimpleTranslateHelper; @endphp
@props(['details'])
<div class="position-relative">
    {{$slot}}
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
                @foreach(json_decode($details->sitting) as $item)
                    <p>{{$item->sitting}} @svg('heroicon-o-user-group', 'room-icon') </p>
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
                            <li>{{$room['roomName']}}</li>
                            <p>@svg('heroicon-o-user-group', 'room-icon') {{strtolower($room['roomCapacity'])}} </p>
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

</div>
