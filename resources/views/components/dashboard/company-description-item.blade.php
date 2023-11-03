@props([
    'title',
    'item',
])
<div class="company-description-item">
    <h5>
        {{$title}}
    </h5>

    <div>
        @if($item)
            <div class="company-description-preview">
                @svg('heroicon-o-check-circle', 'text-primary')
            </div>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>
</div>
