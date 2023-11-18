<x-service.list>
    <h6 class="text-uppercase">{{__('service.rates')}}</h6>

    <x-service.price :details="$details"/>
    <x-service.payment :details="$details"/>
    <x-service.budget :details="$details->budget"/>
    <x-service.deposit :details="$details->deposit"/>

    <x-service.list-item :title="__('partner.travelling_expenses')">
        @if(json_decode($details->travelling_exp))
            <x-service.ul>
                @foreach(json_decode($details->travelling_exp) as $item)
                    <li>
                        {{$item}}
                    </li>
                @endforeach
            </x-service.ul>
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.additional_expenses')">
        @if(json_decode($details->additional_exp))
            <x-service.ul>
                @foreach(json_decode($details->additional_exp) as $item)
                    <li>
                        {{$item}}
                    </li>
                @endforeach
            </x-service.ul>
        @endif
    </x-service.list-item>

</x-service.list>
