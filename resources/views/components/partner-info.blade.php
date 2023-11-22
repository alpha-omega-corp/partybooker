@props([
    'content',
    'tooltip',
    'icon',
    'type'
])


<div x-data="{show: false}" class="partner-info-tippy" data-tippy-content="{{'Company ' . ucfirst($tooltip)}}">
    <div class="info-element">
        <div class="d-flex">
            <div class="{{$tooltip}}">
                <div class="element" @click="show = !show">
                    <span class="icon">
                        @svg($icon)
                    </span>
                </div>
            </div>

            <div x-show="show" class="w-100">
                <a class="text-nowrap m-2 text-lowercase" href="{{$content}}">
                    {{ $content }}
                </a>
            </div>
        </div>
    </div>
</div>






