<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.participant_capacity')">
        @foreach (json_decode($details->participant) as $participant)

            <p>{{ $participant }}</p>

        @endforeach
    </x-service.list-item>

    <x-service.list-item :title="__('partner.service_details')">

        @foreach (json_decode($details->service) as $service)
            <div class="d-flex flex-column mt-3 mb-3">
               <span class="fw-bold">
                    {{ $service->name }}
                </span>
                <br>
                <p>{{ $service->description }}</p>
            </div>
        @endforeach

    </x-service.list-item>

    <x-service.list-item :title="__('partner.wine')">
        <x-service.ul>
            @foreach (json_decode($details->wine) as $wine)
                @if (strlen($wine) > 0)
                    <li>{{ ucfirst($wine) }}</li>
                @endif
            @endforeach
        </x-service.ul>

    </x-service.list-item>

    <x-service.list-item :title="__('partner.affiliations')">
        <x-service.ul>
            @foreach (json_decode($details->affiliation) as $affiliation)
                <li>
                    <a href="{{ $affiliation->link}}" target="_blank">
                        {{ $affiliation->name }}
                    </a>
                </li>
            @endforeach
        </x-service.ul>


    </x-service.list-item>

    <x-service.comment :value="$details->comment"/>


</x-service.list>




