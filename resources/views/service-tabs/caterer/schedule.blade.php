<x-service.list>
    <h6 class="text-uppercase">{{__('service.schedule')}}</h6>

    <x-service.list-item :title="__('partner.annual_holidays')">
        {{$details ? ($details->holidays ?? "") : ""}}
    </x-service.list-item>
</x-service.list>
