<footer class="footer">
    <div class="container">
        @stack('footer')
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

                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="text-center">
                        <h5 class="text-uppercase">{{ __('categories.cat') }}</h5>
                        @if(isset($footerCategories))
                            @foreach (array_chunk($footerCategories->toArray(), 3) as $k => $data)
                                <ul>
                                    @foreach ($data as $item)
                                        <li><a
                                                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $item['lang']['slug']) }}">{{ $item['lang']['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        @endif


                    </div>
                </div>
            </div>
            <section class="subscribe shadow-lg">
                <div class="container">
                    <h6 class="fs-4 fw-bold text-white">{{ __('main.subscribe_offers') }}</h6>
                    <p>{{ __('main.subscribe_text') }}</p>

                    <div class="subscribe-form">
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
                    </div>
                </div>
            </section>

            <section class="alphomega">
                <div class="alphomega-card">

                    <h6 class="text-center text-uppercase fw-bold">

                        {{ __('main.made-by') }}

                    </h6>
                    <div class="d-flex justify-content-center">

                        <a href="https://www.alphomega.org" target="_blank">
                            <img src="{{Vite::image('alphomega_logo.png')}}" alt="alphomega">
                        </a>
                    </div>
                </div>

            </section>
        </div>
    </div>
</footer>
