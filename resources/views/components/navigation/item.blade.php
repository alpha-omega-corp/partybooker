@props([
    'page',
    'href',
    'icon',
    'tooltip'
])

<li class="nav-item" data-tippy-content="{{ $tooltip }}">
    <a page="{{$page}}" href="{{ $href }}"
       class="nav-link d-flex align-items-center justify-content-center"
       aria-current="{{$page}}">

        @svg($icon, 'nav-icon')
        <span class="nav-sm-text">
            {{ $tooltip }}
        </span>

    </a>
</li>
