@props([
    'partner'
])

<a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug) }}"
   class="partner-advert-card @if (strtolower($partner->currentPlan->name) == 'exclusif') top @endif">

    <div class="card">
        @if ($partner->main_img)
            <img src="{{ asset('storage/images/thumbnails/' . $partner->main_img) }}"
                 alt="{{ $partner->main_img }}" class="card-img">
        @else
            <img src="//via.placeholder.com/700x1000/fc0?text=6" class="card-img" alt="...">
        @endif

        <div class="card-img-overlay">
            <h5 class="card-title text-uppercase text-primary fw-bolder">
                @if (app()->getLocale() == 'en')
                    {{ $partner->en_company_name }}
                @else
                    {{ $partner->fr_company_name }}
                @endif
            </h5>

            <div class="text-truncate">
                <p>
                    <small>
                        {{ __('cantons.' . strtolower($partner->location_code) . '_loc') }},
                        {{ $partner->address }}
                    </small>
                </p>
                <p class="card-text">

                    <span class="loc">
                        @if (app()->getLocale() == 'en')
                            {!! $partner->en_slogan !!}
                        @else
                            {!! $partner->fr_slogan !!}
                        @endif
                    </span>


                </p>
            </div>

        </div>

    </div>
</a>
