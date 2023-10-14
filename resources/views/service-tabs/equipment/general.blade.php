<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.geographical_limit')">
        <p>{{$details->geo ?? "" }}</p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.complimentary_services')">
        <p>
            {{$details->complim_services ?? "" }}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.proposed_equipment')">
        <p>
            {{$details->proposed ?? "" }}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.references')">
        <p>
            {{$details->references ?? "" }}
        </p>
    </x-service.list-item>

    <x-service.comment :value="$details->comment"/>

</x-service.list>


