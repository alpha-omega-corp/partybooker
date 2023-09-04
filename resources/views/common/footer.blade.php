<section class="subscribe">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-lg-4">
                <p>
                    <span class="stronger">{{ __('main.subscribe_offers') }}</span>
                    - {{ __('main.subscribe_text') }}
                </p>
            </div>
            <div class="col-md-6">
                <form class="subscribe-form">
                    <input type="email" name="email" placeholder="{{ __('main.subscribe_email') }}">
                    <button type="submit" class="btn-transparent">{{ __('main.subscribe') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <ul>
                    <li><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}">{{ __('main.home_page') }}</a>
                    </li>
                    <li><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus')) }}">{{ __('main.aboutus_page') }}</a>
                    </li>
                    <li><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}">{{ __('main.become_partner_page') }}</a>
                    </li>
                    <li><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/faq') }}">{{ __('main.faqs_page') }}</a>
                    </li>
                    <li><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/user-terms') }}">{{ __('main.user_terms') }}</a>
                    </li>
                    <li><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/contacts') }}">{{ __('main.contact_page') }}</a>
                    </li>
                    <li><a
                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.sitemap')) }}">{{ __('main.sitemap') }}</a>
                    </li>
                    <li class="ft-social-links">
                        @if ($settings[0]->facebook)
                            <a href="{{ $settings[0]->facebook }}" target="_blank"><i class="icon-facebook"></i></a>
                        @endif
                        @if ($settings[0]->linkedin)
                            <a href="{{ $settings[0]->linkedin }}" target="_blank"><i class="icon-linkedin"></i></a>
                        @endif
                        @if ($settings[0]->instagram)
                            <a href="{{ $settings[0]->instagram }}" target="_blank"><i class="icon-instagram "></i></a>
                        @endif
                        @if ($settings[0]->googleplus)
                            <a href="{{ $settings[0]->googleplus }}" target="_blank"><i
                                    class="icon-googleplus "></i></a>
                        @endif
                        @if ($settings[0]->twitter)
                            <a href="{{ $settings[0]->twitter }}" target="_blank"><i class="icon-twitter "></i></a>
                        @endif
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-lg-1 col-sm-12 name">
                <span class="">{{ __('categories.cat') }}:</span>
            </div>
            <div class="col-xl-4 col-lg-4 d-flex flex-wrap col-md-4 col-sm-12">
                @foreach (array_chunk($footerCategories->toArray(), 3) as $k => $data)
                    <ul class="bubbles">
                        @foreach ($data as $item)
                            <li><a
                                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $item['lang']['slug']) }}">{{ $item['lang']['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
            <div class="col-md-3 col-lg-2 text-center col-sm-12">
                <a href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/') }}" class="logo-footer"><img
                        src="/images/logo-footer.png" alt=""></a>
                <br>
                <div class="created" style="font-size: 12px">
                    <span>by</span>
                    <a href="https://lionwood.software/">
                        lionwood-software
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>
@include('common.login')
@include('common.register')
