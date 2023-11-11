@props(['details'])

<div class="position-relative">
    <h6 class="text-uppercase">{{__('service.general_info')}}</h6>


    <x-service.list-item :title="__('partner.min_max_guests')">
        <p>
            @svg('heroicon-o-user-group', 'max-guests-icon')
            {{$details->min_guests ?? 0 }}
            @if(isset($details->max_guests))
                {{__('partner.to')}} {{$details->max_guests}}
            @endif
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.geographical_limit')">
        <p>{{$details->geo}}</p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.smood_ch_link')">

        @if(is_array(json_decode($details->smood)))
            <x-service.ul>
                @foreach(json_decode($details->smood) as $item)
                    <li>
                        <a href="{{$item->url}}" target="_blank">{{$item->name}}</a>
                    </li>
                @endforeach
            </x-service.ul>
        @endif

    </x-service.list-item>


</div>
