@props([
    'title',
    'value',
    'icon' => null,
    'image' => null,
])

<div class="dashboard-stat-card d-flex flex-column" data-tippy-content="{{ $title }}">
    <div class="stat-card-title">
        @if($icon)
            @svg($icon)
        @endif

        @if($image)
            <img src="{{ Vite::social($image) }}" alt="{{ $title }}"/>
        @endif

        <div class="stat-value d-flex justify-content-center w-100">{{ $value }}</div>

    </div>

</div>
