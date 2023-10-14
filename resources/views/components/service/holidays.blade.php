@props(['details'])


<x-service.list-item :title="__('partner.annual_holidays')">
    @if(strlen($details > 0))
        <p>{{$details}}</p>

    @else
        <x-service.list-bool :value="false"/>

    @endif
</x-service.list-item>
