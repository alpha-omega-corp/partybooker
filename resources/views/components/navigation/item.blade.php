@props([
    'href',
    'icon',
    'text'
])

<a href="{{ $href }}" class="nav-item">
    <div class="nav-item-content">

        <div class="nav-item-label">
            <span>{{ ucfirst($text) }}</span>
        </div>

    </div>
</a>
