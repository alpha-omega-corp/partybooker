@props([
    'title',
    'value',
    'icon' => null,
    'image' => null,
])

<div class="dashboard-stat-card shadow-lg" data-tippy-content="{{ $title }}">
    <div class="stat-card-title">
        @if($icon)
            @svg($icon)
        @endif

        @if($image)
            <img src="{{ Vite::image($image) }}" alt="{{ $title }}"/>
        @endif
    </div>

    <p class="stat-value">{{ $value }}</p>
</div>
