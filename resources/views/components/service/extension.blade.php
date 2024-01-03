@props(['details'])


<x-service.list-item :title="__('partner.possibility_extend_time')">
    @if (!is_null($details->ext_true) && $details->ext_true !== '')
        <div class="d-flex">
            <div class="mt-1">
                <x-service.list-bool :value="true"/>
            </div>
            <p class="p-1 m-0">
                {{$details->ext_true}}
            </p>
        </div>
    @else
        <x-service.list-bool :value="false"/>
    @endif
</x-service.list-item>
