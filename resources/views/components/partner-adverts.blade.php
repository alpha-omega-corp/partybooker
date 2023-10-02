@props([
    'partner'
])

<a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug) }}"
   class="@if (strtolower($partner->currentPlan->name) == 'exclusif') top @endif">
    <div class="card partner-advert-card">
        <div class="card-body">
            <div class="advert-image">
                @if ($partner->main_img)
                    <img src="{{ asset('storage/images/thumbnails/' . $partner->main_img) }}"
                         alt="{{ $partner->main_img }}" class="d-flex">
                @else
                    <img src="//via.placeholder.com/700x1000/fc0?text=6" class="d-flex" alt="...">
                @endif
            </div>
            <div class="card-content">
                <h5 class="card-title text-uppercase fw-bold">
                    @if (app()->getLocale() == 'en')
                        {{ $partner->en_company_name }}
                    @else
                        {{ $partner->fr_company_name }}
                    @endif
                </h5>

                <div class="text-truncate">
                    <p>
                        @if (app()->getLocale() == 'en')
                            {!! $partner->en_slogan !!}
                        @else
                            {!! $partner->fr_slogan !!}
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <p class="loc">
                {{ __('cantons.' . strtolower($partner->location_code) . '_loc') }},
                {{ $partner->address }}
            </p>
        </div>
    </div>
</a>
