@props([
    'text',
    'icon'
])

<div class="d-flex align-items-center">
    @svg($icon)
    <p class="m-0 ms-2">{{$text}}</p>
</div>
