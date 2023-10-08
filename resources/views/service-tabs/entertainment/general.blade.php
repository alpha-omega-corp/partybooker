<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.geographical_limit')">
        {{$details->geo ?? "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.number_of_participants')">
        {{$details->participants ?? "" }}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.list_of_your_services')">
        {{$details->services ?? ""}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.equipment_provided')">
        {{$details->equipment ?? ""}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.equipment_not_included')">
        {{$details->eq_not_incl ?? ""}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.biography')">
        {{$details->biography ?? ""}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.references')">
        {{$details->reference ?? ""}}
    </x-service.list-item>

    <h6>{{__('partner.comment')}}</h6>
    <p class="partner-comment"> {{$details->comment ?? ""}}</p>


</x-service.list>



