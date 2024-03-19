@props([
    'href',
    'icon',
    'text'
])

<a href="{{ $href }}" class="nav-item">
    <div class="nav-item-content">
        <div>
            @svg($icon)
        </div>
        <div>
            <span>{{ $text }}</span>
        </div>

    </div>
</a>
