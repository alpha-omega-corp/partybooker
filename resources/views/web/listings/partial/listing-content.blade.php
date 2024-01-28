@php use App\Http\Middleware\LocaleMiddleware; @endphp
<section class="listing-content-section">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-0 col-sm-0 d-none d-sm-none d-md-none d-lg-block">

            <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
                {{ __('main.category') }}
            </h6>

            <ul class="list-group category-filters">
                @foreach ($categories as $c)
                    <li data-catfil="{{ $c->code }}" class="list-group-item list-group-item-parent">

                        <a href="{{url(route('guest.home.listing', ['category' => $c->lang->slug]))}}">
                            {{ $c->lang->name }}
                        </a>
                    </li>

                    @foreach ($c->subcategories as $sub)
                        <li data-catfil="{{ $sub->code }}" class="list-group-item list-group-item-child ">
                            <a class="link-underline link-underline-primary text-truncate"
                               href="{{ url(LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug) }}">
                                {{ $sub->lang->name }}
                            </a>
                        </li>
                    @endforeach
                @endforeach
            </ul>
        </div>

        <div class="col-lg-8 col-xs-12">
            <section class="partner-listing">
                <x-partner.listing
                    :partners="$partners"
                    :partners-fragment="$partnersFragment"/>
            </section>
        </div>
    </div>
</section>

<section class="filters d-flex flex-column flex-shrink-0">
    <div class="d-flex justify-content-end ">
        @include('web.common.category-filter')
    </div>

    <div class="d-flex justify-content-end">
        @include('web.common.event-types-filter')
    </div>

    <div class="d-flex justify-content-end">
        @include('web.listings.partial.location-filter')
    </div>

    <div class="d-flex justify-content-end">
        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}"
           class="btn btn-labeled btn-danger text-uppercase reset-filters">
            <span class="btn-label">
                @svg('heroicon-o-archive-box-x-mark')
            </span>
        </a>
    </div>

</section>
