<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.participant_capacity')">
        @foreach (json_decode($details->participant) as $participant)
            @if (strlen($participant) > 0)
                {{ $participant }}
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.wine')">
        @foreach (json_decode($details->wine) as $wine)
            @if (strlen($wine) > 0)
                {{ $wine }}
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.affiliations')">
        @foreach (json_decode($details->affiliation) as $affiliation)
            @if (strlen($affiliation) > 0)
                {{ $affiliation }}
            @endif
        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.rewards')">
        @foreach (json_decode($details->reward) as $reward)
            @if (strlen($reward) > 0)
                {{ $reward }}
            @endif
        @endforeach
    </x-service.list-item>

    @if(isset($details->comment))
        <h6>{{__('partner.comment')}}</h6>
        <p class="partner-comment"> {{$details->comment}}</p>
    @endif
</x-service.list>




