@if (count($top))
    <section class="services">
        <h4>{{ __('main.top_services') }}</h4>
        <div class="owl-carousel header_carousel">
            @foreach ($top as $service)
                <a class="item"
                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $service->slug) }}">
                    <img src="{{ asset('storage/images/thumbnails/' . $service->main_img) }}"
                        alt="{{ $service->main_img }}">
                    <h6 style="color:#fe8a02 !important;">
                        @if (app()->getLocale() == 'en')
                            {{ $service->en_company_name }}
                        @else
                            {{ $service->fr_company_name }}
                        @endif
                    </h6>
                    <p>{{ strtoupper(__('cantons.' . strtolower($service->location_code) . '_loc')) }}</p>
                </a>
            @endforeach
        </div>
    </section>
@endif
