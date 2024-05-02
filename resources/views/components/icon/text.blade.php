@props([
    'text' => null,
    'icon'
])

<div class="d-flex gap-4 align-items-center justify-content-between text-icon">
    @svg($icon, 'text-gray')
    @if($text)
        <p class="m-0 ms-2">{{$text}}</p>
    @else
        {{{$slot}}}
    @endif

</div>
