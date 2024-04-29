@props([
    'text',
    'icon'
])

<div class="d-flex gap-4 align-items-center justify-content-between text-icon">
    @svg($icon, 'text-gray')
    <p class="m-0 ms-2">{{$text}}</p>

</div>
