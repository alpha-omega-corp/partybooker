@if (count($top))

    <div class="top-services-container">
        <h2 class="fw-bold mb-3 text-center">
            {{ __('main.top_services')}}
        </h2>
        <div x-ref="glide" class="glide">
            <div class="glide__">

                <div class="d-flex justify-content-center">

                    <!-- Bullets -->
                    <div class="d-none d-md-block">
                        <div class="d-flex">
                            <div class="glide__bullets" data-glide-el="controls[nav]">
                                @foreach ($top as $key => $service)
                                    <button class="glide__bullet transition-colors btn"
                                            data-glide-dir="{{ '=' . $key }}"
                                            data-tippy-content="{{ $service->fr_company_name }}">
                                        @svg('heroicon-o-building-office-2')
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <!-- Carousel Item -->
                        @foreach ($top as $key => $service)
                            <li class="glide__slide">
                                <a class="glide__partner_link"
                                   href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $service->slug) }}">

                                    <div class="d-flex align-items-center">
                                        <div class="card shadow-lg">

                                            <div class="card-img">
                                                <img src="{{ Vite::image('logoPB.png') }}" class="card-img-logo"
                                                     alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">

                                                @if ($service->main_img)
                                                    <img src="{{ '/storage/images/thumbnails/' . $service->main_img }}"
                                                         alt="{{ $service->main_img }}" class="card-img-top">
                                                @else
                                                    <img src="//via.placeholder.com/700x1000/fc0?text=6" width="500"
                                                         height="500" class="card-img-top" alt="...">
                                                @endif

                                            </div>

                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase text-truncate fw-bold">
                                                    @if (app()->getLocale() == 'en')
                                                        {{ $service->en_company_name }}
                                                    @else
                                                        {{ $service->fr_company_name }}
                                                    @endif
                                                </h5>

                                                <p class="top-location">{{__('cantons.'.strtolower($service->location_code).'_loc')}}</p>

                                                <div class="top-address">
                                                    {{$service->address}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>


                <!-- Controls -->
                <div class="glide__arrows pointer-events-none" data-glide-el="controls">
                    <!-- Previous Button -->
                    <button
                        class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 btn btn-top"
                        data-glide-dir="<">
                    <span aria-hidden="true">
                        <img class="previous-arrow" src="{{ Vite::image('right-arrow.svg') }}" alt="previous-arrow"/>
                    </span>
                        <span class="sr-only">PREVIOUS</span>
                    </button>

                    <!-- Next Button -->
                    <button
                        class="glide__arrow glide__arrow--right pointer-events-auto disabled:opacity-50 btn btn-top"
                        data-glide-dir=">">
                        <span class="sr-only">NEXT</span>
                        <span aria-hidden="true">
                        <img class="next-arrow" src="{{ Vite::image('right-arrow.svg') }}" alt="next-arrow"/>
                    </span>
                    </button>
                </div>


            </div>

        </div>
    </div>
@endif
