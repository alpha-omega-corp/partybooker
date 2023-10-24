<section class="service-listing">
    @foreach ($partners->items() as $partner)
        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug) }}"
           class="list-item @if (strtolower($partner->currentPlan->name) == 'exclusif') top @endif">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        @if ($partner->main_img)
                            <img src="{{ asset('storage/images/thumbnails/' . $partner->main_img) }}"
                                 alt="{{ $partner->main_img }}" class="cover rounded">
                        @else
                            <img src="//via.placeholder.com/700x1000/fc0?text=6" class="cover rounded" alt="...">
                        @endif

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase fw-bold listing-card-title">
                                @if (app()->getLocale() == 'en')
                                    {{ $partner->en_company_name }}
                                @else
                                    {{ $partner->fr_company_name }}
                                @endif
                            </h5>
                            <div class="card-text description">
                                @if (app()->getLocale() == 'en')
                                    {!! $partner->en_short_descr !!}
                                @else
                                    {!! $partner->fr_short_descr !!}
                                @endif
                            </div>

                            <div class="d-flex location-box">
                                <div class="location">
                                    <img src="{{ Vite::image('map.svg') }}"/>
                                </div>

                                <p class="w-full">
                                    {{ __('cantons.' . strtolower($partner->location_code) . '_loc') }},
                                    {{ $partner->address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</section>
