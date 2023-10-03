@props([
    'partner'
])

<a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug) }}"
   class="partner-advert-card">


    <div class="card">
        @if ($partner->main_img)
            <img src="{{ '/storage/images/thumbnails/' . $partner->main_img }}"
                 alt="{{ $partner->main_img }}" class="card-img">
        @else
            <img src="//via.placeholder.com/700x1000/fc0?text=6" class="card-img" alt="...">
        @endif

        <div class="card-img-overlay">
            <div class=" d-flex flex-shrink-1">
                <h5 class="card-title text-uppercase fw-bolder">
                    @if (app()->getLocale() == 'en')
                        {{ $partner->en_company_name }}
                    @else
                        {{ $partner->fr_company_name }}
                    @endif
                </h5>
            </div>

        </div>

        <div class="text-truncate card-text">
                <span class="text-uppercase">
                    @if (app()->getLocale() == 'en')
                        {!! $partner->en_slogan !!}
                    @else
                        {!! $partner->fr_slogan !!}
                    @endif
                </span>
                <br>
                <small class="font-monospace">
                    {{ __('cantons.' . strtolower($partner->location_code) . '_loc') }},
                    {{ $partner->address }}
                </small>
        </div>
    </div>
</a>
