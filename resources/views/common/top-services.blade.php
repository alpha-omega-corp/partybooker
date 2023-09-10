@if (count($top))
    <div class="my-3">

        <h2 class="font-weight-light">
        </h2>
        <div class="row mx-auto my-auto justify-content-center">
            <div id="partnersCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    @foreach ($top as $key => $service)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="col-md-3">
                                <a class="item"
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $service->slug) }}">
                                    <div class="card">
                                        @if ($service->main_img)
                                            <img src="{{ asset('storage/images/thumbnails/' . $service->main_img) }}"
                                                alt="{{ $service->main_img }}" class="card-img-top">
                                        @else
                                            <img src="//via.placeholder.com/700x1000/fc0?text=6" class="card-img-top"
                                                alt="...">
                                        @endif

                                        <div class="card-body">
                                            <h5 class="card-title text-start text-uppercase text-truncate fw-bold">
                                                @if (app()->getLocale() == 'en')
                                                    {{ $service->en_company_name }}
                                                @else
                                                    {{ $service->fr_company_name }}
                                                @endif
                                            </h5>
                                            <div class="d-flex location">
                                                <img src="{{ asset('images/map.svg') }}" />
                                                <p class="card-text text-uppercase text-start">
                                                    {{ __('cantons.' . strtolower($service->location_code) . '_loc') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <blockquote class="blockquote">
                                                <p>A well-known quote, contained in a blockquote element.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev bg-transparent w-auto" href="#partnersCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next bg-transparent w-auto" href="#partnersCarousel" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <h5 class="mt-2 fw-light"></h5>
    </div>
@endif
