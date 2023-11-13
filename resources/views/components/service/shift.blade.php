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
