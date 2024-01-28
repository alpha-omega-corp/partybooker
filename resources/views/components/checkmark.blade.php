@props([
    'value'
])

<div>
    @if($value)
        <div class="icon-success">
            @svg('heroicon-o-check-circle')
        </div>
    @else
        <div class="icon-danger">
            @svg('heroicon-o-x-circle')
        </div>
    @endif
</div>
