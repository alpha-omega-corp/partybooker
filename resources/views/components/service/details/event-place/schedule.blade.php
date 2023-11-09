@php use App\Helpers\SimpleTranslateHelper; @endphp
<x-service.list>
    <div class="position-relative">
        {{$slot}}
        <h6 class="text-uppercase">{{__('service.schedule')}}</h6>
        <x-service.working-days :days="$details->working_days"/>
        <x-service.holidays :details="$details->holidays"/>

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

        <x-service.extension :details="$details"/>

    </div>
</x-service.list>

