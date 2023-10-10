@php use App\Helpers\SimpleTranslateHelper; @endphp
<x-service.list>
    <h6 class="text-uppercase">{{__('service.schedule')}}</h6>

    <x-service.list-item :title="__('partner.working_days')">
        <p>
            @foreach(json_decode($details->working_days) as $day)
                {{$day}}
            @endforeach
        </p>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.opening_hours')">
        @if($details->working_time)
            <br>
            @foreach(json_decode($details->working_time) as $time)
                <div class="text-uppercase d-flex">
                    @svg('heroicon-m-adjustments-vertical', 'wt-icon text-primary')
                    <div class="d-flex flex-column">
                        <p class="border-bottom">{{$time->description}}</p>

                        <span>
                        {{$time->open}} -
                        {{$time->close}}
                    </span>
                    </div>
                </div>
                <br>

            @endforeach
        @endif
    </x-service.list-item>

    @if($details->holidays)
        <x-service.list-item :title="__('partner.annual_holidays')">
            <p>{{$details->holidays}}</p>
        </x-service.list-item>
    @endif


    <x-service.list-item :title="__('partner.possibility_extend_time')">
        <div class="d-flex">
            <x-service.list-bool :value="$details->extansion"/>
            @if (isset($details) && !is_null($details->ext_true))
                <p class="m-1">{{$details->ext_true}}</p>
            @endif
        </div>
    </x-service.list-item>
</x-service.list>

