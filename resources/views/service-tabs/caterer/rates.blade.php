<x-service.list>
    <h6 class="text-uppercase">{{__('service.rates')}}</h6>
    <x-service.payment :details="$details"/>
    <x-service.budget :details="$details->budget"/>
    <x-service.deposit :details="$details->deposit"/>

    <x-service.list-item :title="__('partner.payment_terms')">
        {{$details->p_terms ?? ""}}
    </x-service.list-item>
</x-service.list>

