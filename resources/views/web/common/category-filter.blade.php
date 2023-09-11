@if (isset($listType) && $listType == 'sub-category')
    <h6 class="text-uppercase fw-bold display-3">
        {{ __('main.category') }}
    </h6>
    <ul class="filters-list">
        @foreach ($categories as $c)
            @if ($current->parent->code == $c->code)
                <li data-catfil="{{ $c->code }}"><a class="check-href cat-check chosefill chose"
                        href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug) }}">{{ $c->lang->name }}</a>
                    <ul class="dropdown-filters-list" style="display: block">
                        @foreach ($c->subcategories as $sub)
                            @if ($current->code == $sub->code)
                                <li data-catfil="{{ $sub->code }}"><a class="check-href subcat-a chose chosefill"
                                        href="#">{{ $sub->lang->name }}</a></li>
                            @else
                                <li data-catfil="{{ $sub->code }}"><a class="check-href subcat-a"
                                        href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            @else
                <li data-catfil="{{ $c->code }}"><a class="check-href cat-check"
                        href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug) }}">{{ $c->lang->name }}</a>
                    <ul class="dropdown-filters-list">
                        @foreach ($c->subcategories as $sub)
                            <li data-catfil="{{ $sub->code }}"><a class="check-href subcat-a"
                                    href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    </ul>
@elseif(isset($listType) && $listType == 'category')
    <h6 class="text-uppercase fw-bold display-3">
        {{ __('main.category') }}
    </h6>
    <ul class="filters-list">
        @foreach ($categories as $c)
            @if ($c->code == $current->code)
                <li data-catfil="{{ $c->code }}"><a class="check-href cat-check chosefill chose"
                        href="#">{{ $c->lang->name }}</a>
                    <ul class="dropdown-filters-list" style="display: block">
                        @foreach ($c->subcategories as $sub)
                            <li data-catfil="{{ $sub->code }}"><a class="check-href subcat-a"
                                    href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug) }}">{{ $sub->lang->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li data-catfil="{{ $c->code }}">
                    <a class="check-href cat-check"
                        href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug) }}">{{ $c->lang->name }}</a>
                    <ul class="dropdown-filters-list">
                        @foreach ($c->subcategories as $sub)
                            <li data-catfil="{{ $sub->code }}"><a class="check-href subcat-a"
                                    href="#">{{ $sub->lang->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    </ul>
@else
    <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
        {{ __('main.category') }}
    </h6>


    <ul class="list-group">
        @foreach ($categories as $c)
            <li data-catfil="{{ $c->code }}" class="list-group-item list-group-item-parent">
                <a
                    href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug) }}">
                    {{ $c->lang->name }}
                </a>
            </li>

            @foreach ($c->subcategories as $sub)
                <li data-catfil="{{ $sub->code }}" class="list-group-item list-group-item-child">
                    <a
                        href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug) }}">
                        {{ $sub->lang->name }}
                    </a>
                </li>
            @endforeach
        @endforeach
    </ul>
@endif
