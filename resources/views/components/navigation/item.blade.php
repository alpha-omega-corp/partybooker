@props([
    'href',
    'icon',
    'text'
])

<a href="{{ $href }}" class="nav-item">
    <div class="nav-item-content">
        <div>
            @svg($icon, 'nav-item-icon')
        </div>
        <div class="nav-item-label">
            <span>{{ ucfirst($text) }}</span>
        </div>

    </div>
</a>
