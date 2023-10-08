<x-service.list>
    <h6 class="text-uppercase">{{__('service.schedule')}}</h6>

    <x-service.list-item :title="__('partner.working_days')">
        @if(isset($details))
            @foreach (json_decode($details->working_days)??[] as $day)
                @if (strlen($day) > 0)
                    {{__('days.'.$day)}}<span class="coma">,</span>
                @endif
            @endforeach
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('partner.duration')">
        {{isset($details) ? $details->duration : ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.annual_holidays')">
        {{$details ? $details->holidays : ''}}
    </x-service.list-item>

    <x-service.list-item :title="__('partner.possibility_extend_time')">
        {{$details ? \App\Helpers\SimpleTranslateHelper::translate($details->extansion) : ''}}
        @if (isset($details) && !is_null($details->ext_true))
            , {{$details->ext_true}}
        @endif
    </x-service.list-item>

</x-service.list>

