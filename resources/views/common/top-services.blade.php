@if (count($top))
    <div class="row mx-auto my-auto justify-content-center">
        <div id="partnersCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($top as $key => $service)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <div class="col-md-3">
                            <a class="item"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $service->slug) }}">
                                <div class="card">
                                    <div class="card-image-container">
                                        @if ($service->main_img)
                                            <img src="{{ asset('storage/images/thumbnails/' . $service->main_img) }}"
                                                alt="{{ $service->main_img }}" class="card-img-top">
                                        @else
                                            <img src="//via.placeholder.com/700x1000/fc0?text=6" class="card-img-top"
                                                alt="...">
                                        @endif

                                        <div class="logo-carousel-item">
                                            <img src="/images/logoPB.png"
                                                alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">

                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="card-title text-start text-uppercase text-truncate fw-bold">
                                                    @if (app()->getLocale() == 'en')
                                                        {{ $service->en_company_name }}
                                                    @else
                                                        {{ $service->fr_company_name }}
                                                    @endif
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex location">
                                            <p class="card-text text-uppercase text-start">
                                                {{ __('cantons.' . strtolower($service->location_code) . '_loc') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <blockquote class="blockquote">
                                            <p class="fs-6">A well-known quote, contained in a blockquote element.</p>
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
@endif
