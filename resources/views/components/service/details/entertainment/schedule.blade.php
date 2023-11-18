<x-service.list>

    <h6 class="text-uppercase">{{__('service.schedule')}}</h6>

    <x-service.working-days :days="$details->working_days"/>
    <x-service.list-item :title="__('partner.opening_hours')">
        @if($details->working_time)
            @foreach(json_decode($details->working_time) as $time)
                <div class="d-flex">
                    @svg('heroicon-m-adjustments-vertical', 'text-primary mt-1')
                    <div class="p-1">
                        <span>{{$time->open}} - {{$time->close}} : {{$time->description}}</span>
                    </div>
                </div>
                <br>
            @endforeach
        @endif
    </x-service.list-item>

    <x-service.list-item :title="__('service.schedule') . ' ' . __('service.activity')">
        @if(json_decode($details->duration))
            @if(is_array(json_decode($details->duration)))
                @foreach(json_decode($details->duration) as $item)
                    <div class="d-flex mb-3">
                        @svg('heroicon-m-adjustments-vertical', 'text-primary mt-1')
                        <div class="p-1 d-flex flex-column">
                            <span>{{$item->start}} - {{$item->end}} </span>
                            <span> {{$item->description}}</span>
                        </div>
                    </div>
                @endforeach
            @endif
        @endif
    </x-service.list-item>

    <x-service.extension :details="$details"/>

    <x-service.holidays :details="$details->holidays"/>
 
</x-service.list>

