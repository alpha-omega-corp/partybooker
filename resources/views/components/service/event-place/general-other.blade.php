@php use App\Helpers\EventsStaffTranslatorHelper;use App\Helpers\OtherServicesTranslatorHelper;use App\Helpers\SimpleTranslateHelper; @endphp
@props(['details'])
<div class="position-relative">
    {{$slot}}
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
</div>
