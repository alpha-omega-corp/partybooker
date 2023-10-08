<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.geographical_limit')">
        {{$details->geo ?? "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.complimentary_services')">
        {{$details->complim_services ?? "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.proposed_equipment')">
        {{$details->proposed ?? "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.references')">
        {{$details->references ?? "" }}
    </x-service.list-item>

    <h6 class="text-uppercase">{{__('partner.comment')}}</h6>
    <p>{{$details->comment ?? ''}}</p>

</x-service.list>


