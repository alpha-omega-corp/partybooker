<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item title="{{__('partner.cocktail_reception_capacity')}}">
        {{$details->coctail ?? ''}}
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.banquet_capacity')}}">
        {{$details->banquet ?? ''}}
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.outdoor_facility')}}">
        {{$details->outdoor ?? ''}}
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.sitting_schema')}}">
        {{isset($details->sitting) ? implode(', ', json_decode($details->sitting)) : ''}}
    </x-service.list-item>

    <x-service.list-item title="{{__('partner.conference_room')}}">

        @if(isset($details->room))
            <ul>
                @foreach($details->room as $room)

                    <li><b>Room</b> : {{$room['name']}}</li>
                    <li><b>Capacity</b> : {{$room['capacity']}}</li>
                @endforeach
            </ul>

        @endif

    </x-service.list-item>

    @if (isset($details->oth_facilities))
        <x-service.list-item title="{{__('partner.other_services')}}">
            {{$details->oth_facilities}}
        </x-service.list-item>
    @endif

    <x-service.list-item title="{{__('partner.reduced_mobility_access')}}">
        {{\App\Helpers\SimpleTranslateHelper::translate($details->reduced_mob)}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.car_park')">
        {{$details->car ?? ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.conveniences')">
        @if(isset($details->convenience) && $details->convenience)
            @if ($details->convenience > 0)
                {{\App\Helpers\ConveniencesTranslatorHelper::translate($details->convenience)}}<span class="coma">,&nbsp;</span>
            @endif
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.Bar_dance_floor_stage')">
        @foreach ( isset($details->facilities) ? json_decode($details->facilities) : [] as $facilities)
            @if (strlen($facilities) > 0)
                {{\App\Helpers\BarDanceFloorTranslatorHelper::translate($facilities)}}<span class="coma">&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.bring_alcohol')">
        {{\App\Helpers\SimpleTranslateHelper::translate($details->alcohole)}} {{$details->alcohole_yes}}
    </x-service.list-item>

    <h6>{{__('partner.catering-stewardship')}}</h6>

    <x-service.list-item :title="__('partner.property_prepare_meals')">
        {{\App\Helpers\SimpleTranslateHelper::translate($details->meals)}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.works_with_affiliated_partners')">
        {{$details->affiliate_caterer ? \App\Helpers\SimpleTranslateHelper::translate($details->affiliate_caterer) : ""}}
        @foreach (isset($details->yes_af_caterers) ? json_decode($details->yes_af_caterers) : [] as $yes_af_caterers)

            @if (strlen($yes_af_caterers->name) > 0 )
                <a href="{{$yes_af_caterers->url ?? "#"}}" target="_blank">{{$yes_af_caterers->name}}</a><br>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.free_choice_of_caterer')">
        {{\App\Helpers\SimpleTranslateHelper::translate($details->free_caterer)}}
        @foreach (isset($details->yes_free_caterers) ? json_decode($details->yes_free_caterers) : [] as $yes_free_caterers)
            @if (strlen($yes_free_caterers) > 0)
                {{$yes_free_caterers}}<span class="coma"><br></span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.external_food_allowed')">
        {{\App\Helpers\SimpleTranslateHelper::translate($details->ext_food)}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.available_furniture_equipment')">
        @foreach (isset($details->furniture) ? json_decode($details->furniture) : [] as $furniture)
            @if (strlen($furniture) > 0)
                {{\App\Helpers\FurnitureTranslatorHelper::translate($furniture)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.technical_equipment')">
        @foreach (isset($details->equipment) ? json_decode($details->equipment) : [] as $equipment)
            @if (strlen($equipment) > 0)
                {{\App\Helpers\TechnicalEquipmentTranslatorHelper::translate($equipment)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach

        {{$details->other_eq ?? ''}}
    </x-service.list-item>

    <h6>{{__('partner.other_services')}}</h6>

    <x-service.list-item :title="__('partner.staff')">
        @foreach (isset($details->staff) ? json_decode($details->staff) : [] as $staff)
            @if (strlen($staff) > 0)
                {{\App\Helpers\EventsStaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
        {{$details->other_staff ?? '' }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.accommodation')">
        {{\App\Helpers\SimpleTranslateHelper::translate($details->accomodation)}}
        {{$details->number_questrooms ?? ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('become_partner.other')">
        {{\App\Helpers\SimpleTranslateHelper::translate($details->transport)}}
        @if(isset($details->other_services))
            @foreach (json_decode($details->other_services) ?? [] as $other_services)
                @if (strlen($other_services) > 0)
                    {{\App\Helpers\OtherServicesTranslatorHelper::translate($other_services)}}<span class="coma">,&nbsp;</span>
                @endif
            @endforeach
        @endif
        {{$details->more_services ?? ''}}
    </x-service.list-item>

    @if(isset($details->comment))
        <h6>{{__('partner.comment')}}</h6>
        <p>{{$details->comment}}</p>

    @endif


</x-service.list>
















