@props([
    'title',
    'item',
])
<div class="company-description-item d-flex">


    <div class="d-flex flex-column">
        <div class="description-language-preview">
            {{$title}}
        </div>
        @if($item)
            <div class="company-description-preview">
                @svg('heroicon-o-check-circle', 'text-primary')
            </div>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>
</div>
