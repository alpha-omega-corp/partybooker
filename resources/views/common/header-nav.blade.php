<nav class="navbar navbar-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if (Auth::user() == null)
            <div class="auth">
                <a class="btn btn-accent" data-bs-toggle="modal" href="#loginModalToggle" role="button">
                    {{ __('main.login') }}
                </a>
            </div>
        @endif

        <div class="language">
            <a href="<?= route('setlocale', ['lang' => 'fr']) ?>" lan="fr">
                <img src="{{ Vite::image('switzerland.svg') }}" alt="Partybooker French" />
            </a>
            <a href="<?= route('setlocale', ['lang' => 'en']) ?>" lan="en">
                <img src="{{ Vite::image('united-kingdom.svg') }}" alt="Partybooker English" />
            </a>
        </div>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">

            <div class="offcanvas-body">
                <div class="navigation d-flex flex-column flex-shrink-0 h-full fixed-top bg-secondary">
                    <div class="nav-logo-container position-relative">
                        <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}" class="nav-logo">
                            <img src="{{ Vite::image('logoPB.png') }}" class="mx-auto"
                                alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">

                        </a>
                        <div class="position-absolute close-container">
                            <button type="button" class="btn-close btn-close-white nav-sm-close"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>



                    </div>
                    <ul class="nav nav-flush flex-column text-center">

                        <li class="nav-item" data-tippy-content="{{ __('main.home_page') }}">
                            <a page="home" href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}"
                                class="nav-link bg-primary text-white border-top align-items-center d-flex"
                                aria-current="home">

                                @svg('heroicon-o-home')
                                <span class="nav-sm-text">
                                    {{ __('main.home_page') }}
                                </span>

                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.listing_page') }}">
                            <a page="listing"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings')) }}"
                                class="nav-link bg-primary text-white border-top align-items-center d-flex"
                                aria-current="page">

                                @svg('heroicon-o-queue-list')
                                <span class="nav-sm-text">
                                    {{ __('main.listing_page') }}
                                </span>

                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.become_partner_page') }}">
                            <a page="partner"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}"
                                class="nav-link bg-primary text-white border-top align-items-center d-flex"
                                aria-current="page">

                                @svg('heroicon-o-identification')
                                <span class="nav-sm-text">
                                    {{ __('main.become_partner_page') }}
                                </span>

                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.aboutus_page') }}">
                            <a page="aboutus"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus')) }}"
                                class="nav-link bg-primary text-white border-top align-items-center d-flex"
                                aria-current="page">

                                @svg('heroicon-o-information-circle')
                                <span class="nav-sm-text">
                                    {{ __('main.aboutus_page') }}
                                </span>

                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.faqs_page') }}">
                            <a page="faqs"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq') }}"
                                class="nav-link bg-primary text-white border-top align-items-center d-flex"
                                aria-current="page">

                                @svg('heroicon-o-question-mark-circle')
                                <span class="nav-sm-text">
                                    {{ __('main.faqs_page') }}
                                </span>

                            </a>
                        </li>

                        <li class="nav-item" data-tippy-content="{{ __('main.blog_page') }}">
                            <a page="blog"
                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog') }}"
                                class="nav-link bg-primary text-white border-top align-items-center d-flex"
                                aria-current="page">

                                @svg('heroicon-o-book-open')

                                <span class="nav-sm-text">
                                    {{ __('main.blog_page') }}
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown border-top bg-primary">
                        @if (Auth::user())
                            <div class="btn-group dropup">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('images/ape.svg') }}" alt="mdo" width="24"
                                        height="24" class="rounded-circle mr-2">
                                </button>
                                <ul class="dropdown-menu">

                                    @if (Auth::user()->id_partner)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('profile', Auth::user()->id_partner) }}">
                                                Profile
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}">
                                                {{ __('main.become_partner_page') }}
                                            </a>
                                        </li>
                                    @endif
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
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<section>
    @include('auth.login')
    @include('auth.register')
</section>
