<x-service.list>
    <div class="position-relative">
        <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

        <x-service.list-item :title="__('partner.proposed_equipment')">
            @if(json_decode($details->proposed))
                <x-service.ul>
                    @foreach(json_decode($details->proposed) as $x)
                        <li>{{$x}}</li>
                    @endforeach
                </x-service.ul>
            @endif

        </x-service.list-item>

        <x-service.list-item :title="__('partner.complimentary_services')">
            @if(json_decode($details->complim_services))
                <x-service.ul>
                    @foreach(json_decode($details->complim_services) as $x)
                        <li>{{$x}}</li>
                    @endforeach
                </x-service.ul>
            @endif
        </x-service.list-item>


        <x-service.list-item :title="__('partner.references')">
            @if(json_decode($details->references))
                <x-service.ul>
                    @foreach(json_decode($details->references) as $x)
                        <li>{{$x}}</li>
                    @endforeach
                </x-service.ul>
            @endif
        </x-service.list-item>
        <x-service.list-item :title="__('partner.geographical_limit')">
            <p>{{$details->geo ?? "" }}</p>
        </x-service.list-item>

        <x-service.comment :value="$details->comment"/>

    </div>


</x-service.list>


