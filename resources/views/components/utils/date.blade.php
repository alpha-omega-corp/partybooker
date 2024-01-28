@props([
    'type',
    'date'
])

<div class="tippy date" data-tippy-content="{{$date}}">
    @if($type === DateType::CREATED)
        @svg('heroicon-o-calendar')
    @else
        @svg('heroicon-o-calendar-days')
    @endif

    {{ucfirst($type->value)}}
</div>
