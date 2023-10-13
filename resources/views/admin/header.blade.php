<header>
    <div class="container">
        <div class="logo">
            <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}"><img
                    src="{{ Vite::image('logoPB.png') }}" alt=""></a>
        </div>
        <div class="mobile-opener">
            <div class="mobile-btn"></div>
        </div>
        <div class="menu">
            <div class="greeting">
                <ul>
                    <li>{{ __('partybooker-cp.hello') }}, <?php echo Auth::user()->name; ?>!</li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li class="lang"><a href="<?= route('setlocale', ['lang' => 'en']) ?>"><img
                                src="{{ Vite::image('images/en.png') }}" alt="en"/></a></li>
                    <li class="lang"><a href="<?= route('setlocale', ['lang' => 'fr']) ?>"><img
                                src="{{ Vite::image('images/fr.png') }}" alt="fr"/></a></li>
                </ul>
            </div>
            <div class="header-navigation">
                <ul>
                    <li page="main"><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp') }}">{{ __('partybooker-cp.main') }}</a>
                    </li>
                    <li page="messages"><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/messages') }}">{{ __('partybooker-cp.messages') }}</a>
                    </li>
                    <li page="listing"><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/listing') }}">{{ __('partybooker-cp.listing') }}</a>
                    </li>
                    <li page="swisswine"><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/swisswin') }}">{{ __('partybooker-cp.swisswine_directories') }}</a>
                    </li>
                    <li page="blog"><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/blog') }}">{{ __('partybooker-cp.blog') }}</a>
                    </li>
                    <li page="faq"><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/faq') }}">{{ __('partybooker-cp.faq') }}</a>
                    </li>
                    <li page="settings" class="hassub">
                        <a href="#" onclick="return false;">{{ __('partybooker-cp.settings') }}</a>
                        <ul class="submenu">
                            <li><a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/admin-profile') }}">{{ __('partybooker-cp.profile') }}</a>
                            </li>
                            <li><a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/plans') }}">{{ __('partybooker-cp.plans') }}</a>
                            </li>
                            <li><a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/contacts') }}">{{ __('partybooker-cp.contacts') }}</a>
                            </li>
                            <li><a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/user-terms') }}">{{ __('partybooker-cp.user-terms') }}</a>
                            </li>
                            <li><a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/cp/setting/partner-terms') }}">{{ __('partybooker-cp.provider-terms') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
