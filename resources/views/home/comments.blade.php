<div class="comments">

    <h2 class="text-uppercase text-center display-5 fw-bold text-pink p-5">
        {{__('comments.title')}}
    </h2>

    <div class="glide-comments-container">
        <div x-ref="glide" class="glide-comments">
            <div class="container">
                <div class="glide__">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <x-reference
                                    :title="__('comments.reference-title-1')"
                                    :text="__('comments.reference-text-1')"/>
                            </li>

                            <li class="glide__slide">
                                <x-reference
                                    :title="__('comments.reference-title-2')"
                                    :text="__('comments.reference-text-2')"/>
                            </li>

                            <li class="glide__slide">
                                <x-reference
                                    :title="__('comments.reference-title-3')"
                                    :text="__('comments.reference-text-3')"/>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Controls -->
                <div class="glide__arrows pointer-events-none position-relative" data-glide-el="controls">
                    <!-- Previous Button -->
                    <button
                        class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 btn btn-top"
                        data-glide-dir="<">
                            <span aria-hidden="true">
                                <img class="previous-arrow" src="{{ Vite::image('right-arrow.svg') }}"
                                     alt="previous-arrow"/>
                            </span>
                        <span class="sr-only"></span>
                    </button>

                    <!-- Next Button -->
                    <button
                        class="glide__arrow glide__arrow--right pointer-events-auto disabled:opacity-50 btn btn-top"
                        data-glide-dir=">">
                        <span class="sr-only"></span>
                        <span aria-hidden="true">
                                <img class="next-arrow" src="{{ Vite::image('right-arrow.svg') }}" alt="next-arrow"/>
                            </span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
