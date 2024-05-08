@props([
    'link',
])

<div class="d-flex gap-4 align-items-center justify-content-between link-icon">
    {{$slot}}

    @if($link)
        <a href="{{$link}}" target="_blank" class="m-0 ms-2 d-flex gap-2">
            @svg('heroicon-o-arrow-right', 'text-gray')
        </a>
    @else
        @svg($xIcon, 'text-danger')
    @endif
</div>
