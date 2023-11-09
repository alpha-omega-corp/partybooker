@props(['details'])

<div class="position-relative">
    {{$slot}}
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>

    <x-service.list-item :title="__('partner.geographical_limit')">
        <p>{{$details->geo ?? "" }}</p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.min_max_guests')">
        <p>
            @svg('heroicon-o-user-group', 'max-guests-icon')
            {{$details->min_guests ?? 0 }}
            @if(isset($details->max_guests))
                {{__('partner.to')}} {{$details->max_guests ?? 0}}
            @endif
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.smood_ch_link')">
        <p>
            <a href="{{$details->smood ?? ''}}" target="_blank">{{$details->smood ?? 0}}</a>
        </p>
    </x-service.list-item>

    
</div>
