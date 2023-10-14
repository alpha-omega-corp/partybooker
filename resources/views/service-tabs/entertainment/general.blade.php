<x-service.list>
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.geographical_limit')">
        <p>
            {{$details->geo ?? "" }}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.number_of_participants')">
        <p>
            {{$details->participants ?? "" }}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.list_of_your_services')">
        <p>
            {{$details->services ?? ""}}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.equipment_provided')">
        <p>
            {{$details->equipment ?? ""}}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.equipment_not_included')">
        <p>
            {{$details->eq_not_incl ?? ""}}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.biography')">
        <p>
            {{$details->biography ?? ""}}
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.references')">
        <p>
            {{$details->reference ?? ""}}
        </p>
    </x-service.list-item>

    <x-service.comment :value="$details->comment"/>

</x-service.list>



