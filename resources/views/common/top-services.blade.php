@if (count($top))

    <div class="container">
        <h2 class="text-white display-1 fw-bold text-center">
            {{ __('main.top_services') }}
        </h2>
    </div>

    <div class="row mx-auto my-auto justify-content-center">
        <div id="partnersCarousel" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($top as $key => $service)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <div class="col-lg-3 col-12 mx-auto">
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

                                    <h5 class="card-title text-start text-uppercase text-truncate fw-bold">
                                        @if (app()->getLocale() == 'en')
                                            {{ $service->en_company_name }}
                                        @else
                                            {{ $service->fr_company_name }}
                                        @endif
                                    </h5>

                                    <div class="description">

                                        @if (app()->getLocale() == 'en')
                                            {!! $service->en_short_descr !!}
                                        @else
                                            {!! $service->fr_short_descr !!}
                                        @endif
                                        <p class="fs-6">A well-known quote, contained in a blockquote element.
                                        </p>
                                        <p class="fs-6">A well-known quote, contained in a blockquote element.
                                        </p>
                                        <p class="fs-6">A well-known quote, contained in a blockquote element.
                                        </p>
                                        <p class="fs-6">A well-known quote, contained in a blockquote element.
                                        </p>
                                        <p class="fs-6">A well-known quote, contained in a blockquote element.
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <blockquote class="blockquote">
                                        <p class="fs-6">A well-known quote, contained in a blockquote element.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>

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
