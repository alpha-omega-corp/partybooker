@php use App\Helpers\SimpleTranslateHelper; @endphp
<x-service.list>
    <div class="position-relative">
        {{$slot}}
        <h6 class="text-uppercase">{{__('service.schedule')}}</h6>
        <x-service.working-days :days="$details->working_days"/>
        <x-service.holidays :details="$details->holidays"/>

        <x-service.list-item :title="__('partner.opening_hours')">
            @if($details->working_time)
                <br>
                @foreach(json_decode($details->working_time) as $time)
                    <div class="text-uppercase d-flex">
                        @svg('heroicon-m-adjustments-vertical', 'wt-icon text-primary')
                        <div class="d-flex flex-column">
                            <p class="border-bottom">{{$time->description}}</p>

                            <span>
                        {{$time->opening}} -
                        {{$time->closing}}
                    </span>
                        </div>
                    </div>
                    <br>

                @endforeach
            @endif
        </x-service.list-item>

        <x-service.extension :details="$details"/>

    </div>
</x-service.list>

