<div class="service-listing">
    @foreach ($partners->items() as $partner)
        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listing') . '/' . $partner->slug) }}"
            class="list-item @if (strtolower($partner->currentPlan->name) == 'exclusif') top @endif">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/images/thumbnails/' . $partner->main_img) }}"
                            alt="{{ $partner->main_img }}" class="cover img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">
                                @if (app()->getLocale() == 'en')
                                    {{ $partner->en_company_name }}
                                @else
                                    {{ $partner->fr_company_name }}
                                @endif
                            </h5>
                            <p class="card-text description">
                                @if (app()->getLocale() == 'en')
                                    {!! $partner->en_short_descr !!}
                                @else
                                    {!! $partner->fr_short_descr !!}
                                @endif


                            </p>

                            <div class="d-flex">
                                <div class="location">
                                    <img src="{{ asset('images/map.svg') }}" />
                                </div>

                                <p class="w-full p-1">
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
</div>

@if ($partners->lastPage() > 1)
    <ul class="pagination" style="color: black">
        <li class="page-item navigation">
            <a href="{{ $partners->url(1) }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $partners->lastPage(); $i++)
            <li class="page-item {{ $partners->currentPage() == $i ? ' active' : '' }}">
                <a href="{{ $partners->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        @if ($partners->currentPage() != $partners->lastPage())
            <li
                class="page-item navigation {{ $partners->currentPage() == $partners->lastPage() ? ' disabled' : '' }}">
                <a href="{{ $partners->url($partners->currentPage() + 1) }}">Next</a>
            </li>
        @endif
    </ul>
@endif
