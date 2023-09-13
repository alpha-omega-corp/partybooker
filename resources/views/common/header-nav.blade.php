<nav class="navbar navbar-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="language">
            <a href="<?= route('setlocale', ['lang' => 'fr']) ?>" lan="fr">
                <img src="{{ asset('images/switzerland.svg') }}" alt="..." />
            </a>
            <a href="<?= route('setlocale', ['lang' => 'en']) ?>" lan="en">
                <img src="{{ asset('images/united-kingdom.svg') }}" alt="..." />
            </a>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-body">
                <div class="navigation d-flex flex-column flex-shrink-0 h-full fixed-top bg-secondary">

                    <div class="position-relative">

                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}" class="nav-logo">
                            <img src="/images/logoPB.png" class="mx-auto"
                                alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">


                        </a>

                        <div class="position-absolute top-0 end-0 nav-sm-close">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>


                    </div>
                    <ul class="nav nav-flush flex-column mb-auto text-center">

                        <li class="nav-item" data-tippy-content="{{ __('main.home_page') }}">
                            <a page="home" href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}"
                                class="nav-link bg-primary text-white  border-top " aria-current="home">

                                <div class="container">
                                    <div class="justify-content-start d-flex">
                                        <div><i class="bi bi-house"></i></div>
                                        <div>
                                            <p class="nav-sm-text">{{ __('main.home_page') }}</p>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.listing_page') }}">
                            <a page="listing"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}"
                                class="nav-link bg-primary text-white border-top" aria-current="page">

                                <div class="container">
                                    <div class="justify-content-start d-flex">
                                        <div>
                                            <i class="bi bi-list-columns-reverse"></i>
                                        </div>
                                        <div>
                                            <p class="nav-sm-text">{{ __('main.listing_page') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.become_partner_page') }}">
                            <a page="partner"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}"
                                class="nav-link bg-primary text-white border-top" aria-current="page">
                                <div class="container">
                                    <div class="justify-content-start d-flex">
                                        <div>
                                            <i class="bi bi-person-plus"></i>
                                        </div>
                                        <div>
                                            <p class="nav-sm-text">{{ __('main.become_partner_page') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.aboutus_page') }}">
                            <a page="aboutus"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus')) }}"
                                class="nav-link bg-primary text-white border-top" aria-current="page">

                                <div class="container">
                                    <div class="justify-content-start d-flex">
                                        <div>
                                            <i class="bi bi-person-vcard"></i>
                                        </div>
                                        <div>
                                            <p class="nav-sm-text">{{ __('main.aboutus_page') }}</p>
                                        </div>
                                    </div>
                                </div>


                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.faqs_page') }}">
                            <a page="faqs"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq') }}"
                                class="nav-link bg-primary text-white border-top" aria-current="page">

                                <div class="container">
                                    <div class="justify-content-start d-flex">
                                        <div>
                                            <i class="bi bi-patch-question"></i>
                                        </div>
                                        <div>
                                            <p class="nav-sm-text">{{ __('main.faqs_page') }}</p>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.blog_page') }}">
                            <a page="blog"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog') }}"
                                class="nav-link bg-primary text-white border-top" aria-current="page">

                                <div class="container">
                                    <div class="justify-content-start d-flex">
                                        <div>
                                            <i class="bi bi-journal-bookmark"></i>
                                        </div>
                                        <div>
                                            <p class="nav-sm-text">{{ __('main.blog_page') }}</p>
                                        </div>
                                    </div>
                                </div>

                            </a>
                        </li>
                    </ul>
                    <div class="dropdown border-top bg-white">

                        @if (Auth::user())
                            <a href="#"
                                class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                                id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/ape.svg') }}" alt="mdo" width="24"
                                    height="24" class="rounded-circle mr-2">
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

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @endif


                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
