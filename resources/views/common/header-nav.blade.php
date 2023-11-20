<nav class="navbar fixed-top bg-white">
    <div class="d-flex">
        <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/')}}">
            <x-logo/>
        </a>

        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                @svg('heroicon-s-bars-3-bottom-left')
            </button>

            @if (Auth::user() == null)
                <div class="auth">
                    <a class="btn btn-accent" data-bs-toggle="modal" href="#loginModalToggle" role="button">
                        {{ __('main.login') }}
                    </a>
                </div>
            @endif

            <div class="socials">
                @include('common.social')
            </div>

            <div class="d-flex flex-column">
                <div class="language">
                    <a href="<?= route('setlocale', ['lang' => 'fr']) ?>" lan="fr">
                        <img src="{{ Vite::image('switzerland.svg') }}" alt="Partybooker French"/>
                    </a>
                    <a href="<?= route('setlocale', ['lang' => 'en']) ?>" lan="en">
                        <img src="{{ Vite::image('united-kingdom.svg') }}" alt="Partybooker English"/>
                    </a>
                </div>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" data-bs-scroll="true"
                 data-bs-backdrop="false"
                 aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-body">
                    <div class="navigation h-full">
                        <div class="nav-logo-container mt-5">

                            <div class="position-absolute close-container">
                                <button type="button" class="btn-close btn-close-white nav-sm-close"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        </div>
                        <hr>

                        <ul class="nav nav-flush flex-column text-center">

                            <x-navigation.item
                                    page="home"
                                    :href="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/')"
                                    icon="heroicon-o-home"
                                    :tooltip="__('main.home_page')"/>

                            <x-navigation.item
                                    page="listing"
                                    :href="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings'))"
                                    icon="heroicon-o-queue-list"
                                    :tooltip="__('main.listing_page')"/>

                            <x-navigation.item
                                    page="partner"
                                    :href="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner'))"
                                    icon="heroicon-o-identification"
                                    :tooltip="__('main.become_partner_page')"/>
                            <hr>

                            <x-navigation.item
                                    page="aboutus"
                                    :href="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus')) "
                                    icon="heroicon-o-information-circle"
                                    :tooltip="__('main.aboutus_page')"/>


                            <x-navigation.item
                                    page="blog"
                                    :href="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/blog')"
                                    icon="heroicon-o-book-open"
                                    :tooltip="__('main.blog_page')"/>

                            <x-navigation.item
                                    page="faqs"
                                    :href="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq')"
                                    icon="heroicon-o-question-mark-circle"
                                    :tooltip="__('main.faqs_page')"/>


                            <x-navigation.item
                                    page="comments"
                                    :href="url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.comments'))"
                                    icon="heroicon-o-chat-bubble-bottom-center-text"
                                    :tooltip="__('main.comments_page')"/>

                            <div class="dropdown dropup border-top bg-primary dropdown-user">
                                @if (Auth::user())
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <p>{{Auth::user()->name}}</p>
                                        </button>
                                        <ul class="dropdown-menu">

                                            @if(Auth::user()->type === 'admin')
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{ route('admin') }}">
                                                        Administration
                                                    </a>
                                                </li>
                                            @else
                                                @if (Auth::user()->id_partner)
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="{{ route('profile-advert', Auth::user()->id_partner) }}">
                                                            Dashboard
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
                        </ul>
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
