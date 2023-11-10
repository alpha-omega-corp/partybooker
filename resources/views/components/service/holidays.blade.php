@props(['details'])


<x-service.list-item :title="__('partner.annual_holidays')">
    @if(json_decode($details) !== null)
        @foreach(json_decode($details) as $item)
            <div class="d-flex">
                @svg('heroicon-o-arrows-pointing-out', 'text-primary mt-1')

                <div class="p-1">
                    <span>{{$item->holiday_start}}</span>
                    -
                    <span>{{$item->holiday_end}}</span>
                </div>
            </div>
            <br>
        @endforeach
    @endif

</x-service.list-item>
