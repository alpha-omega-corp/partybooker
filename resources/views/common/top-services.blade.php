@if (count($top))
    <div class="container text-center my-3">
        <h2 class="font-weight-light">
            {{ __('main.top_services') }}
        </h2>
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    @foreach ($top as $key => $service)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="col-md-3">
                                <a class="item"
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $service->slug) }}">
                                    <div class="card">
                                        <div class="card-img">
                                            @if ($service->main_img)
                                                <img src="{{ asset('storage/images/thumbnails/' . $service->main_img) }}"
                                                    alt="{{ $service->main_img }}" class="img-fluid">
                                            @else
                                                <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                                            @endif

                                        </div>
                                        <div class="card-img-overlay">
                                            <h6 style="color:#fe8a02 !important;">
                                                @if (app()->getLocale() == 'en')
                                                    {{ $service->en_company_name }}
                                                @else
                                                    {{ $service->fr_company_name }}
                                                @endif
                                            </h6>
                                            <p class="text-uppercase">
                                                {{ __('cantons.' . strtolower($service->location_code) . '_loc') }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <h5 class="mt-2 fw-light"></h5>
    </div>
@endif
