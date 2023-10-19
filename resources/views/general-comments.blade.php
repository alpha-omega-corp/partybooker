@extends('main')

@section('page')
    page="comments"
@endsection

@section('title')
    <title>{{strtoupper(__('about.about_us'))}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="container">
        <div class="comments">

            <h1 class="text-uppercase display-4 fw-bold">
                {{__('comments.title-1')}}
                <span class="text-primary display-1">
                {{__('comments.title-2')}}
            </span>
                {{__('comments.title-3')}}
            </h1>

            <div x-ref="glide" class="glide-comments">
                <div class="glide__">



                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide ">
                                    <x-reference
                                        :title="__('comments.reference-title-1')"
                                        :text="__('comments.reference-text-1')" />
                                </li>

                                <li class="glide__slide">
                                    <x-reference
                                        :title="__('comments.reference-title-2')"
                                        :text="__('comments.reference-text-2')" />
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
                                <img class="previous-arrow" src="{{ Vite::image('right-arrow.svg') }}" alt="previous-arrow"/>
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
@endsection
