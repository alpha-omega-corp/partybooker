@props([
    'content',
    'tooltip',
    'icon',
    'type'
])



<div x-data="{show: false}" class="position-relative partner-info-tippy" data-tippy-content="{{$tooltip}}">

    <div class="details-info rounded-circle">
        <div x-show="!show" @click="show = true" class="icon">
            @svg($icon)
        </div>

        <div class="position-relative">
            <div x-show="show" class="bg-secondary element">
                <div @click="show = false" class="element-back bg-primary d-flex justify-content-center align-items-center" style="height: 40px" >
                    @svg('heroicon-o-arrow-up-left')
                </div>
            </div>


        </div>
    </div>

    <div x-show="show" class="position-absolute top-50">
        <a class="text-center" href="{{ $type . ':' . $content }}">
            {{ $content }}
        </a>
    </div>

</div>
