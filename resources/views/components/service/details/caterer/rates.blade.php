<x-service.list>
    <div class="position-relative">
        <h6 class="text-uppercase">{{__('service.rates')}}</h6>
        <x-service.price :details="$details"/>

        <x-service.budget :details="$details->budget"/>
        <x-service.payment :details="$details"/>
        <x-service.deposit :details="$details->deposit"/>

        @if($details->p_terms)
            <x-service.list-item :title="__('partner.payment_terms')">
                <div class="mb-3">
                    {{$details->p_terms}}
                </div>
            </x-service.list-item>
        @endif

    </div>
</x-service.list>

