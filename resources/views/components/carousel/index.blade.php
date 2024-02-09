@props([
    'name',
    'count' => 3,
    'container' => false,
    'background' => 'white'
])

@if(isset($title))
    <div class="p-5">
        {{$title}}
    </div>
@endif

<div class="carousel__frame bg-{{$background}}">
    <div id="{{$name}}" x-data="carousel('{{$name}}', '{{$count}}')">
        <div class="{{$container ? 'container' : ''}}">

            <!-- Carousel -->
            <div class="glide__">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        {{$items}}
                    </ul>
                </div>
            </div>

            <!-- Controls -->
            <div class="glide__arrows pointer-events-none" data-glide-el="controls">
                <!-- Previous -->
                <button
                    class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 btn"
                    data-glide-dir="<">
                            <span aria-hidden="true">
                                <img class="previous-arrow" src="{{ Vite::app('carousel-arrow.png') }}"
                                     alt="previous-arrow"/>
                            </span>
                    <span class="sr-only"></span>
                </button>

                <!-- Next -->
                <button
                    class="glide__arrow glide__arrow--right pointer-events-auto disabled:opacity-50 btn"
                    data-glide-dir=">">
                    <span class="sr-only"></span>
                    <span aria-hidden="true">
                                <img class="next-arrow" src="{{ Vite::app('carousel-arrow.png') }}" alt="next-arrow"/>
                            </span>
                </button>
            </div>
        </div>
    </div>
</div>










