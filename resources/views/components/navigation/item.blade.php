@props([
    'page',
    'href',
    'icon',
    'tooltip'
])

<li class="nav-item" data-tippy-content="{{ $tooltip }}">
    <div class="d-flex justify-content-center align-items-center">
        <a page="{{$page}}" href="{{ $href }}"
           class="nav-link d-flex align-items-center justify-content-center bg-accent"

           aria-current="{{$page}}">
            <div class="rounded-circle bg-accent p-2 d-flex">


                @svg($icon, 'nav-icon')
                <span class="nav-sm-text">
                    {{ $tooltip }}
                </span>


            </div>
        </a>

    </div>
</li>
