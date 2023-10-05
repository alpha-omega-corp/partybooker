<h4>{{ __('service.for') }} {{ __('categories.cat4') }}</h4>
<h6>{{ strtoupper(__('service.general')) }}</h6>
<p><span>{{ __('partner.service_or_activity_name') }}:</span>
@if($details)
    @foreach ($details as $service)
        {{dd($details)}}
        <p>{{ __('partner.name') }}: {{ $service['name'] }}, {{ __('service.description') }}:
            {{ $service['description'] }}
        <p>
    @endforeach
@endif

</p>


@if(isset($details->participant))
    <p><span>{{ __('partner.participant_capacity') }}:</span>
        @foreach (json_decode($details->participant) as $participant)
            @if (strlen($participant) > 0)
                {{ $participant }}
            @endif
        @endforeach
    </p>
@endif


@if(isset($details->wine))
    <p><span>{{ __('partner.wine') }}:</span>
        @foreach (json_decode($details->wine) as $wine)
            @if (strlen($wine) > 0)
                {{ $wine }}
            @endif
        @endforeach
    </p>
@endif


@if(isset($details->affiliation))
    <p><span>{{ __('partner.affiliations') }}:</span>
        @foreach (json_decode($details->affiliation) as $affiliation)
            @if (strlen($affiliation) > 0)
                {{ $affiliation }}
            @endif
        @endforeach
    </p>
@endif


@if(isset($details->reward))
    <p><span>{{ __('partner.rewards') }}:</span>
        @foreach (json_decode($details->reward) as $reward)
            @if (strlen($reward) > 0)
                {{ $reward }}
            @endif
        @endforeach
    </p>
@endif



