<footer class="footer">
    <div class="container">
        <div class="footer-box  shadow-lg">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <h5 class="text-uppercase">{{ __('main.sitemap') }}</h5>
                        <ul>
                            <li>
                                <a
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
                                    <a href="{{ $settings[0]->instagram }}" target="_blank"><i
                                            class="icon-instagram "></i></a>
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
                </div>

                <div class="col-md-6">
                    <div class="text-center">
                        <h5 class="text-uppercase">{{ __('categories.cat') }}</h5>
                        @foreach (array_chunk($footerCategories->toArray(), 3) as $k => $data)
                            <ul>
                                @foreach ($data as $item)
                                    <li><a
                                            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $item['lang']['slug']) }}">{{ $item['lang']['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach

                    </div>
                </div>
            </div>
            <section class="subscribe shadow-lg">
                <div class="container">
                    <h6 class="fs-4 fw-bold text-white">{{ __('main.subscribe_offers') }}</h6>
                    <p>{{ __('main.subscribe_text') }}</p>

                    <form class="subscribe-form">

                        <div class="d-flex m-2">
                            <div class="input-group">
                                <span class="input-group-text" id="offer">
                                  @svg('heroicon-o-envelope')
                                </span>
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    class="form-control"
                                    placeholder="{{ __('main.subscribe_email') }}"
                                    aria-label="{{__('main.subscribe_email')}}"
                                    aria-describedby="offer">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('main.subscribe') }}</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</footer>
