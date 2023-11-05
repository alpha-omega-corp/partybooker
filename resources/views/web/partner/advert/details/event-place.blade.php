@php use App\Helpers\BudgetsHelper; @endphp
@php use App\Helpers\PaymentMethodsTranslatorHelper; @endphp
@php use App\Helpers\BarDanceFloorTranslatorHelper; @endphp
@php use App\Helpers\FurnitureTranslatorHelper; @endphp
@php use App\Helpers\TechnicalEquipmentTranslatorHelper; @endphp
@php use App\Helpers\EventsStaffTranslatorHelper; @endphp
@php use App\Helpers\OtherServicesTranslatorHelper; @endphp


<div class="service-information-card">
    <h6>{{__('partner.working_schedule')}}:</h6>

    {{__('partner.working_days')}}
    @foreach (json_decode($advert->service->working_days)??[] as $day)
        @if (strlen($day) > 0)
            {{__('days.'.$day)}}<span class="coma">,&nbsp;</span>
        @endif
    @endforeach

    @if($advert->service->opening || $advert->service->closing)
        {{__('partner.opening_hours')}}
        {{$advert->service->opening}} - {{$advert->service->closing}}
    @else
        {{__('partner.opening_hours')}}
        @foreach(json_decode($advert->service->working_time) ?? [] as $time)
            <p>{!! "<b>{$time->open} - {$time->close}</b> : {$time->description}"!!}</p>
        @endforeach
    @endif

    {{__('partner.annual_holidays')}}
    {{$advert->service->holidays}}

    {{__('partner.possibility_extend_time')}}
    {{$advert->service->extansion}}
    {{$advert->service->ext_true}}


    <a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a>
</div>

<li class="li schedule"></li>

<li class="li"><h6>{{__('partner.rates_conditions')}}</h6></li>
{{--	<li class="li"><span>{{__('partner.price')}}:</span> {{$user->partnerInfo->price}} CHF @if($advert->service->price_for == 'other') {{$advert->service->other_price}} @else {{__('partner.'.$advert->service->price_for)}} @endif</li>--}}
<li class="li">
    <span>{{__('partner.budget')}}:</span>{{BudgetsHelper::getDescription($user->partnerInfo->budget)}}
</li>
<li class="li"><span>{{__('partner.booking_deposit')}}:</span> {{$advert->service->deposit}}</li>
<li class="li"><span>{{__('partner.payment_methods')}}:</span></li>
<li class="li">
    @foreach (json_decode($advert->service->paymeny)??[] as $payment)
        @if (strlen($payment) > 0)
            {{PaymentMethodsTranslatorHelper::translate($payment)}}<span class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li">{{$advert->service->other_payment}}</li>
<li class="li rates"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

<li class="li"><h6>{{__('partner.edit_service_general_info')}}</h6></li>
<li class="li"><span>{{__('partner.cocktail_reception_capacity')}}:</span> {{$advert->service->coctail}}</li>
<li class="li"><span>{{__('partner.banquet_capacity')}}:</span> {{$advert->service->banquet}}</li>
<li class="li"><span>{{__('partner.outdoor_facility')}}:</span> {{$advert->service->outdoor}}</li>
<li class="li"><span>{{__('partner.sitting_schema')}}:</span>
    @foreach (json_decode($advert->service->sitting)??[] as $sitting)
        @if (strlen($sitting) > 0)
            {{$sitting}}<span class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li"><span>{{__('partner.conference_room')}}:</span></li>
<li class="li">
    @foreach ($advert->service->room ?? [] as $room)
        {{__('partner.name')}}: {{$room['name']}}, {{strtolower(__('partner.capacity'))}}: {{$room['capacity']}}
        <span class="coma"><br></span>
    @endforeach
</li>
<li class="li"><span>{{__('partner.reduced_mobility_access')}}:</span> {{$advert->service->reduced_mob}}</li>
<li class="li"><span>{{__('partner.car_park')}}:</span> {{$advert->service->car}}</li>
<li class="li"><span>{{__('partner.Bar_dance_floor_stage')}}:</span></li>
<li class="li">
    @foreach (json_decode($advert->service->facilities)??[] as $facilities)
        @if (strlen($facilities) > 0)
            {{BarDanceFloorTranslatorHelper::translate($facilities)}}<span class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li">{{$advert->service->oth_facilities}}</li>
<li class="li"><span>{{__('partner.conveniences')}}:</span>
    @foreach (json_decode($advert->service->convenience)??[] as $convenience)
        @if (strlen($convenience) > 0)
            {{$convenience}}<span class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li"><span>{{__('partner.bring_alcohol')}}:</span> {{$advert->service->alcohole}}</li>
<li class="li">{{$advert->service->alcohole_yes}}</li>
<li class="li general"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

<li class="li"><h6>{{__('partner.catering-stewardship')}}</h6></li>
<li class="li"><span>{{__('partner.property_prepare_meals')}}</span> {{$advert->service->meals}}</li>
<li class="li"><span>{{__('partner.works_with_affiliated_partners')}}</span> {{$advert->service->affiliate_caterer}}
</li>
<li class="li">
    @if($advert->service->yes_af_caterers)
        @foreach (json_decode($advert->service->yes_af_caterers)??[] as $yes_af_caterers)
            @if (strlen($yes_af_caterers->name) > 0)
                <a href="{{$yes_af_caterers->url ?? '#'}}" target="_blank">{{$yes_af_caterers->name}}</a><span
                    class="coma"><br></span>
            @endif
        @endforeach
    @endif
</li>
<li class="li"><span>{{__('partner.free_choice_of_caterer')}}:</span> {{$advert->service->free_caterer}}</li>
<li class="li">
    @if($advert->service->yes_free_caterers)
        @foreach (json_decode($advert->service->yes_free_caterers) ?? [] as $yes_free_caterers)
            @if (strlen($yes_free_caterers) > 0)
                {{$yes_free_caterers}}<span class="coma"><br></span>
            @endif
        @endforeach
    @endif
</li>
<li class="li"><span>{{__('partner.external_food_allowed')}}</span> {{$advert->service->ext_food}}</li>
<li class="li"><span>{{__('partner.available_furniture_equipment')}}:</span></li>
<li class="li">
    @foreach (json_decode($advert->service->furniture)??[] as $furniture)
        @if (strlen($furniture) > 0)
            {{FurnitureTranslatorHelper::translate($furniture)}}<span class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li"><span>{{__('partner.technical_equipment')}}:</span></li>
<li class="li">
    @foreach (json_decode($advert->service->equipment)??[] as $equipment)
        @if (strlen($equipment) > 0)
            {{TechnicalEquipmentTranslatorHelper::translate($equipment)}}<span
                class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li">{{$advert->service->other_eq}}</li>
<li class="li catering"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

<li class="li"><h6>{{__('partner.other_services')}}</h6></li>
<li class="li"><span>{{__('partner.staff')}}:</span></li>
<li class="li">
    @foreach (json_decode($advert->service->staff)??[] as $staff)
        @if (strlen($staff) > 0)
            {{EventsStaffTranslatorHelper::translate($staff)}}<span class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li">{{$advert->service->other_staff}}</li>
<li class="li"><span>{{__('partner.accommodation')}}:</span></li>
<li class="li">{{$advert->service->accomodation}}</li>
<li class="li">{{$advert->service->number_questrooms}}</li>
<li class="li"><span>{{__('become_partner.other')}}:</span></li>
<li class="li">
    @foreach (json_decode($advert->service->other_services)??[] as $other_services)
        @if (strlen($other_services) > 0)
            {{OtherServicesTranslatorHelper::translate($other_services)}}<span
                class="coma">,&nbsp;</span>
        @endif
    @endforeach
</li>
<li class="li">{{$advert->service->more_services}}</li>
<li class="li otherservice"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>

<li class="li"><h6>{{__('partner.want_to_add_something')}}</h6></li>
<li class="li"><span>{{__('partner.comments')}}:</span></li>
<li class="li">{{$advert->service->comment}}</li>
<li class="li comment"><a href="#" class="button" data-db="{{$iterator}}">{{__('partner.edit')}}</a></li>
</ul>

