@props([
    'title',
    'value',
    'icon' => null,
    'image' => null,
])

<div class="partner-statistics tippy" data-tippy-content="{{ $title }}">
    <div class="partner-statistics-title">
        @if($icon)
            @svg($icon)
        @endif

        @if($image)
            <img src="{{ Vite::social($image) }}" alt="{{ $title }}"/>
        @endif

        <div class="partner-statistics-value d-flex justify-content-center w-100">{{ $value }}</div>

    </div>

</div>
