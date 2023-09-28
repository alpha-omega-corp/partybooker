<div class="btn-group dropstart btn-category-filter">
    <button type="button" class="btn btn-labeled btn-primary text-uppercase" data-bs-toggle="dropdown"
        data-bs-display="static" aria-expanded="false">
        <span class="btn-label">
            @svg('heroicon-o-archive-box')
        </span>
        <span class="btn-text"> {{ __('main.category') }}</span>
    </button>

    <ul class="dropdown-menu">

        @foreach ($categories as $c)
            <div class="dropdown-item">
                <li data-catfil="{{ $c->code }}" class="list-group-item list-group-item-parent">
                    <a
                        href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug) }}">
                        {{ $c->lang->name }}
                    </a>
                </li>

                @foreach ($c->subcategories as $sub)
                    <li data-catfil="{{ $sub->code }}" class="list-group-item list-group-item-child ">
                        <a class="link-underline link-underline-primary text-truncate"
                            href="{{ url(\App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $c->lang->slug . '/' . $sub->lang->slug) }}">
                            {{ $sub->lang->name }}
                        </a>
                    </li>
                @endforeach
            </div>
        @endforeach
    </ul>
</div>
