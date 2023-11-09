@php use App\Helpers\EventsStaffTranslatorHelper;use App\Helpers\OtherServicesTranslatorHelper;use App\Helpers\SimpleTranslateHelper; @endphp
@props(['details'])
<div class="position-relative">
    {{$slot}}
    <h6 class="text-uppercase">{{__('partner.other_services')}}</h6>


    <x-service.list-item :title="__('partner.staff')">
        @if(isset($details->staff))
            <x-service.ul>
                @foreach(json_decode($details->staff) as $staff)
                    @if($staff != 'other')
                        <li>
                            {{ucfirst(EventsStaffTranslatorHelper::translate($staff))}}
                        </li>
                    @endif
                @endforeach
            </x-service.ul>
        @endif

        @if(isset($details->other_staff))
            <x-service.ul>
                @foreach(json_decode($details->other_staff) as $staff)
                    <li>
                        {{ucfirst($staff)}}
                    </li>
                @endforeach
            </x-service.ul>
        @endif
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
                <div class="d-flex mt-1">
                    <x-service.list-bool :value="'yes'"/>
                    <div class="rooms-yes">
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
        @if(json_decode($details->other_services))
            <x-service.ul>
                @foreach (json_decode($details->other_services) as $item)
                    @if($item !== 'other')
                        <li>
                            {{ucfirst(OtherServicesTranslatorHelper::translate($item))}}
                        </li>
                    @endif
                @endforeach
            </x-service.ul>
        @endif

        @if(json_decode($details->more_services))
            <x-service.ul>
                @foreach (json_decode($details->more_services) as $item)
                    @if($item !== 'other')
                        <li>
                            {{ucfirst($item)}}
                        </li>
                    @endif
                @endforeach
            </x-service.ul>
        @endif
    </x-service.list-item>
</div>
