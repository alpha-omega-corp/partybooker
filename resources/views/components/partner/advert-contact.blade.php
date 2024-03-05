@props([
    'content',
    'tooltip',
    'icon',
    'type'
])

<div x-data="{show: false}">
    <div class="contact-item">
        <div @click="show = !show">
            <span class="tippy" data-tippy-content="{{'Company ' . ucfirst($tooltip)}}">
                @svg($icon)
            </span>
        </div>

        <div x-show="show" class="w-100">
            <a class="text-nowrap m-2 text-lowercase" href="{{$content}}">
                {{ $content }}
            </a>
        </div>
    </div>
</div>
