<h2 class="text-uppercase fw-bold text-center p-5 text-standard display-4 more-information-title">
    {{__('main.more_info')}}
</h2>

<x-accordion
    accordion="join">
    <div class="d-flex flex-wrap justify-content-center gap-4">
        <div>
            <div>
                <x-accordion.item
                    accordion="join"
                    name="mission"
                    image="group-rocket.svg">
                    <x-slot:title>
                        {{ __('main.info-block-title-2') }}
                    </x-slot:title>

                    <span>{{ __('main.info-block-2') }}</span>
                    <b>{{ __('main.info-block-2-1') }}</b>
                    <span>{{ __('main.info-block-2-2') }}</span>
                    <br>
                    <hr>
                    <span>{{ __('main.info-block-2-3') }}</span>
                </x-accordion.item>
            </div>

            <div>
                <x-accordion.item
                    accordion="join"
                    name="partnership"
                    :show="true"
                    image="group-icon.svg">
                    <x-slot:title>
                        {{ __('main.info-block-title-3') }}
                    </x-slot:title>

                    <span>{{ __('main.info-block-at') }}</span>
                    <b>{{ __('main.info-block-pb') }}</b>
                    <span>{{ __('main.info-block-3') }}</span>
                    <br>
                    <hr>
                    <i>{{ __('main.info-block-3-1') }}</i>
                    <a
                        href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . 'accordions.blade.php/' . __('urls.partner')) }}">
                        <button type="button"
                                class="btn btn-primary register">
                            @svg('heroicon-m-arrow-long-right')
                        </button>
                    </a>
                </x-accordion.item>
            </div>
        </div>

        <div>
            <div>
                <x-accordion.item
                    accordion="join"
                    name="description"
                    image="group-new.svg">
                    <x-slot:title>
                        {{__('main.info-block-title-1')}}
                    </x-slot:title>

                    <p>{{ __('main.info-block-1') }}</p>
                </x-accordion.item>
            </div>

            <div>
                <x-accordion.item
                    accordion="join"
                    name="location"
                    image="group-map.svg">
                    <x-slot:title>
                        {{ __('main.info-block-title-1-1') }}
                    </x-slot:title>

                    <p>{{ __('main.info-block-1-1') }}</p>
                </x-accordion.item>
            </div>
        </div>
    </div>
</x-accordion>
