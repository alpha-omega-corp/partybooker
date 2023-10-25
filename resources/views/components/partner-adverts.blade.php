@props([
    'partner'
])

<a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug) }}"
   target="_blank"
   class="partner-advert-card" data-tippy-content="{{__('partner.see-ad')}}">


    <div class="card">
        <div class="d-flex">
            <div>
                @if ($partner->main_img)
                    {{$slot}}
                @else
                    <img src="//via.placeholder.com/700x1000/fc0?text=6" class="card-img" alt="...">
                @endif
            </div>

            <div>
                <div class="position-relative">
                    <div class="advert-body">
                        <h5 class="card-title text-uppercase fw-bolder">
                            @if (app()->getLocale() == 'en')
                                {{ $partner->en_company_name }}
                            @else
                                {{ $partner->fr_company_name }}
                            @endif
                        </h5>
                        <small class="font-monospace">
                            {{ __('cantons.' . strtolower($partner->location_code) . '_loc') }},
                            {{ $partner->address }}
                        </small>


                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
