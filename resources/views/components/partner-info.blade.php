@props([
    'content',
    'tooltip',
    'icon',
    'type'
])



<div x-data="{show: false}" class="partner-info-tippy m-2" data-tippy-content="{{$tooltip}}">
    <div class="info-element">
        <div class="d-flex">

            <div @click="show = !show">
                <span class="icon">
                    @svg($icon)
                </span>
            </div>

            <div x-show="show" class="w-100">
                <a class="text-nowrap m-2 text-lowercase" href="{{ $type . ':' . $content }}">
                    {{ $content }}
                </a>
            </div>
        </div>
    </div>
</div>






