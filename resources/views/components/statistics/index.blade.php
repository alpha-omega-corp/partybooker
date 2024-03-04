@props([
    'title',
    'value',
    'icon' => null,
    'image' => null,
])

<div class="app-statistics tippy" data-tippy-content="{{ $title }}">
    <div class="statistic-title">
        @if($icon)
            @svg($icon)
        @endif

        @if($image)
            <img src="{{ Vite::social($image) }}" alt="{{ $title }}"/>
        @endif

        <div class="statistic-value d-flex justify-content-center w-100">{{ $value }}</div>

    </div>

</div>
