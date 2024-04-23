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
    </div>

    <div class="statistic-value">
        <span>{{ $value }}</span>
    </div>

</div>
