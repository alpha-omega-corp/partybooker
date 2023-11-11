@props([
    'network',
    'value'
])


<div class="cp-socials-item">
    <img src="{{Vite::image($network . '.svg')}}" alt="{{ucfirst($network)}}">
    <div class="d-flex align-items-center justify-content-center">
        @if($value)
            @svg('heroicon-o-check-circle', 'text-primary')
        @else
            @svg('heroicon-o-no-symbol', 'text-danger')
        @endif
    </div>
</div>
