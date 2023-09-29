<h4>{{ __('service.for') }} {{ __('categories.cat4') }}</h4>
<h6>{{ strtoupper(__('service.general')) }}</h6>
<p><span>{{ __('partner.service_or_activity_name') }}:</span>
    @foreach ($details->service as $service)
        <p>{{ __('partner.name') }}: {{ $service['name'] }}, {{ __('service.description') }}:
            {{ $service['description'] }}<span class="coma">;</br></span>
        <p>
    @endforeach
</p>
<p><span>{{ __('partner.participant_capacity') }}:</span>
    @foreach (json_decode($details->participant) as $participant)
        @if (strlen($participant) > 0)
            {{ $participant }}<span class="coma">;</br></span>
        @endif
    @endforeach
</p>
<p><span>{{ __('partner.wine') }}:</span>
    @foreach (json_decode($details->wine) as $wine)
        @if (strlen($wine) > 0)
            {{ $wine }}<span class="coma">;</br></span>
        @endif
    @endforeach
</p>
<p><span>{{ __('partner.affiliations') }}:</span>
    @foreach (json_decode($details->affiliation) as $affiliation)
        @if (strlen($affiliation) > 0)
            {{ $affiliation }}<span class="coma">;</br></span>
        @endif
    @endforeach
</p>
<p><span>{{ __('partner.rewards') }}:</span>
    @foreach (json_decode($details->reward) as $reward)
        @if (strlen($reward) > 0)
            {{ $reward }}<span class="coma">;</br></span>
        @endif
    @endforeach
</p>
<p><span>{{ __('partner.articles') }}:</span>
    @if ($details->article == 'art_d')
        <a href="{{ '/storage/articles/' . $details->art_d }}" target="blank">{{ $details->art_d }}</a>
    @elseif ($details->article == 'art_l')
        <a href="{{ $details->art_l }}" target="blank">{{ $details->art_l }}</a>
    @endif
</p>
<p><span>{{ __('partner.available_furniture_equipment') }}:</span>
    @foreach (json_decode($details->furniture) ?? [] as $furniture)
        @if (strlen($furniture) > 0)
            {{ \App\Helpers\FurnitureTranslatorHelper::translate($furniture) }}<span class="coma">, </span>
        @endif
    @endforeach
</p>
<p><span>{{ __('partner.technical_equipment') }}:</span>
    @foreach (json_decode($details->equipment) ?? [] as $equipment)
        @if (strlen($equipment) > 0)
            {{ \App\Helpers\TechnicalEquipmentTranslatorHelper::translate($equipment) }}<span class="coma">, </span>
        @endif
    @endforeach
</p>

<h6>{{ __('partner.food_services_info') }}</h6>
<p><span>{{ __('partner.food_on_site') }}:</span> {{ $details->food_on_site }}</p>
<p>{{ $details->yes_food }}</p>
<p><span>{{ __('partner.catering_service_available') }}:</span> {{ $details->catering }}</p>
<p><span>{{ __('partner.caterer_affiliation') }}:</span> {{ $details->caterer_aff }}</p>
@if (strlen($details->caterers_aff) > 0)
    <p><span>{{ __('partner.affiliated_partybooker_caterer') }}:</span> </p>
@endif

<h6>{{ __('partner.comment') }}</h6>
<p>{{ $details->comment }}</p>
