<ul class="serviceDetails{{ $iterator }}">
    <li block="serviceDetails{{ $iterator }}">
        <h4>{{ __('partner.service_details') }} #{{ $iterator }}</h4> {{ __('service.for') }}
        {{ __('service.' . $advert->view_name) }}
    </li>
    <li class="li">
        <h6>{{ __('partner.working_schedule') }}:</h6>
    </li>
    <li class="li"><span>{{ __('partner.working_days') }}:</span>
        @foreach (json_decode($advert->service->working_days) ?? [] as $day)
            @if (strlen($day) > 0)
                {{ __('days.' . $day) }}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </li>
    <li class="li"><span>{{ __('partner.opening_hours') }}:</span> {{ $advert->service->opening }} -
        {{ $advert->service->closing }}</li>
    <li class="li"><span>{{ __('partner.annual_holidays') }}:</span></li>
    <li class="li">{{ $advert->service->holidays }}</li>
    <li class="li"><span>{{ __('partner.possibility_extend_time') }}:</span> {{ $advert->service->extansion }}</li>
    <li class="li">{{ $advert->service->ext_true }}</li>
    <li class="li"><span>{{ __('partner.opening_upon_appointment') }}:</span> {{ $advert->service->opening_upon }}
    </li>
    <li class="li schedule"><a href="#" class="button"
            data-db="{{ $iterator }}">{{ __('partner.edit') }}</a></li>

    <li class="li">
        <h6>{{ __('partner.rates_conditions') }}</h6>
    </li>
    {{--	<li class="li"><span>{{__('partner.price')}}:</span> {{$user->partnerInfo->price}} @if ($advert->service->price_for == 'other') {{$advert->service->other_price}} @else {{__('partner.'.$advert->service->price_for)}} @endif</li> --}}
    <li class="li">
        <span>{{ __('partner.budget') }}:</span>{{ \App\Helpers\BudgetsHelper::getDescription($user->partnerInfo->budget) }}
    </li>
    <li class="li"><span>{{ __('partner.booking_deposit') }}:</span> {{ $advert->service->deposit }}</li>
    <li class="li"><span>{{ __('partner.payment_methods') }}:</span></li>
    <li class="li">
        @foreach (json_decode($advert->service->paymeny) ?? [] as $payment)
            @if (strlen($payment) > 0)
                {{ \App\Helpers\PaymentMethodsTranslatorHelper::translate($payment) }}<span
                    class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </li>
    <li class="li">{{ $advert->service->other_payment }}</li>
    <li class="li rates"><a href="#" class="button" data-db="{{ $iterator }}">{{ __('partner.edit') }}</a>
    </li>

    <li class="li">
        <h6>{{ __('partner.edit_service_general_info') }}</h6>
    </li>
    <li class="li"><span>{{ __('partner.service_or_activity_name') }}:</span></li>
    <li class="li">
        @foreach ($advert->service->service ?? [] as $service)
            {{ __('partner.name') }}: {{ $service['name'] }}, {{ __('service.description') }}:
            {{ $service['description'] }}<span class="coma"></br></span>
        @endforeach
    </li>
    <li class="li"><span>{{ __('partner.participant_capacity') }}</span></li>
    <li class="li">
        @foreach (json_decode($advert->service->participant) ?? [] as $participant)
            @if (strlen($participant) > 0)
                {{ $participant }}<span class="coma">;</br></span>
            @endif
        @endforeach
    </li>
    <li class="li"><span>{{ __('partner.wine') }}</span></li>
    <li class="li">
        @foreach (json_decode($advert->service->wine) ?? [] as $wine)
            @if (strlen($wine) > 0)
                {{ $wine }}<span class="coma">;</br></span>
            @endif
        @endforeach
    </li>
    <li class="li"><span>{{ __('partner.affiliations') }}</span></li>
    <li class="li">
        @foreach (json_decode($advert->service->affiliation) ?? [] as $affiliation)
            @if (strlen($affiliation) > 0)
                {{ $affiliation }}<span class="coma">;</br></span>
            @endif
        @endforeach
    </li>
    <li class="li"><span>{{ __('partner.rewards') }}</span> </li>
    <li class="li">
        @foreach (json_decode($advert->service->reward) ?? [] as $reward)
            @if (strlen($reward) > 0)
                {{ $reward }}<span class="coma">;</br></span>
            @endif
        @endforeach
    </li>
    <li class="li"><span>{{ __('partner.articles') }}</span></li>
    <li class="li">
        @if ($advert->service->article == 'art_d')
            <a href="{{ '/storage/articles/' . $advert->service->art_d }}"
                target="blank">{{ $advert->service->art_d }}</a>
        @elseif ($advert->service->article == 'art_l')
            <a href="{{ $advert->service->art_l }}" target="blank">{{ $advert->service->art_l }}</a>
        @endif
    </li>
    <li class="li"><span>{{ __('partner.available_furniture_equipment') }}</span></li>
    <li class="li">
        @foreach (json_decode($advert->service->furniture) ?? [] as $furniture)
            @if (strlen($furniture) > 0)
                {{ \App\Helpers\FurnitureTranslatorHelper::translate($furniture) }}<span class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </li>
    <li class="li"><span>{{ __('partner.technical_equipment') }}</span> </li>
    <li class="li">
        @foreach (json_decode($advert->service->equipment) ?? [] as $equipment)
            @if (strlen($equipment) > 0)
                {{ \App\Helpers\TechnicalEquipmentTranslatorHelper::translate($equipment) }}<span
                    class="coma">,&nbsp;</span>
            @endif
        @endforeach
    </li>
    <li class="li general"><a href="#" class="button" data-db="{{ $iterator }}">{{ __('partner.edit') }}</a>
    </li>

    <li class="li">
        <h6>{{ __('partner.food_services_info') }}</h6>
    </li>
    <li class="li"><span>{{ __('partner.food_on_site') }}:</span> {{ $advert->service->food_on_site }}</li>
    <li class="li">{{ $advert->service->yes_food }}</li>
    <li class="li"><span>{{ __('partner.catering_service_available') }}:</span> {{ $advert->service->catering }}
    </li>
    <li class="li"><span>{{ __('partner.caterer_affiliation') }}:</span> {{ $advert->service->caterer_aff }}</li>
    @if (strlen($advert->service->caterers_aff) > 0)
        <li class="li"><span>{{ __('partner.affiliated_partybooker_caterer') }}:</span>
            {{ $advert->service->caterers_aff }}</li>
    @endif
    <li class="li food"><a href="#" class="button" data-db="{{ $iterator }}">{{ __('partner.edit') }}</a>
    </li>

    <li class="li">
        <h6>{{ __('partner.want_to_add_something') }}</h6>
    </li>
    <li class="li"><span>{{ __('partner.comments') }}:</span></li>
    <li class="li">{{ $advert->service->comment }}</li>
    <li class="li comment"><a href="#" class="button" data-db="{{ $iterator }}">{{ __('partner.edit') }}</a>
    </li>
</ul>
@include('web.partner.advert.popups.wine.edit-schedule')
@include('web.partner.advert.popups.wine.edit-rates')
@include('web.partner.advert.popups.wine.edit-general')
@include('web.partner.advert.popups.wine.edit-food')
@include('web.partner.advert.popups.edit-comment')
