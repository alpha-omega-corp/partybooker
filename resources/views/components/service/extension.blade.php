@props(['details'])


<x-service.list-item :title="__('partner.possibility_extend_time')">
    @if (!is_null($details->ext_true))
        <div class="d-flex">
            <x-service.list-bool :value="true"/>
            <p class="p-1">
                {{$details->ext_true}}
            </p>
        </div>
    @else
        <x-service.list-bool :value="false"/>
    @endif
</x-service.list-item>
