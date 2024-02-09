@props([
    'href',
    'icon',
    'text'
])

<li>
    <a href="{{ $href }}">
        @svg($icon, 'nav-icon')
        <span>{{ $text }}</span>
    </a>
</li>
