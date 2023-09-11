<div class="d-flex flex-column flex-shrink-0 h-full fixed-top bg-secondary" style="width: 4.75rem;height:100%;">

    <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}" class="nav-logo">
        <img src="/images/logoPB.png" class="mx-auto"
            alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
    </a>


    <ul class="nav nav-flush flex-column mb-auto text-center">
        <li class="nav-item" data-tippy-content="{{ __('main.home_page') }}">
            <a page="home" href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}"
                class="nav-link bg-primary text-white py-3 border-top" aria-current="home">
                <i class="bi bi-house"></i>
            </a>
        </li>

        <li class="nav-item" data-tippy-content="{{ __('main.listing_page') }}">
            <a page="listing"
                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}"
                class="nav-link bg-primary text-white py-3 border-top" aria-current="page">
                <i class="bi bi-list-columns-reverse"></i>
            </a>
        </li>

        <li class="nav-item" data-tippy-content="{{ __('main.become_partner_page') }}">
            <a page="partner"
                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}"
                class="nav-link bg-primary text-white py-3 border-top" aria-current="page">
                <i class="bi bi-person-plus"></i>
            </a>
        </li>

        <li class="nav-item" data-tippy-content="{{ __('main.aboutus_page') }}">
            <a page="aboutus"
                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus')) }}"
                class="nav-link bg-primary text-white py-3 border-top" aria-current="page">
                <i class="bi bi-person-vcard"></i>
            </a>
        </li>

        <li class="nav-item" data-tippy-content="{{ __('main.faqs_page') }}">
            <a page="faqs" href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq') }}"
                class="nav-link bg-primary text-white py-3 border-top" aria-current="page">
                <i class="bi bi-patch-question"></i>
            </a>
        </li>

        <li class="nav-item" data-tippy-content="{{ __('main.blog_page') }}">
            <a page="blog" href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog') }}"
                class="nav-link bg-primary text-white py-3 border-top" aria-current="page">
                <i class="bi bi-journal-bookmark"></i>
            </a>
        </li>
    </ul>
    <div class="dropdown border-top">

        @if (Auth::user())
            <a href="#"
                class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/ape.svg') }}" alt="mdo" width="24" height="24"
                    class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign out
                    </a>
                </li>
            </ul>


            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endif


    </div>
</div>
