<x-home.accordion
    accordion="join"
    class="right-accordions">
    <x-home.accordion-item
        accordion="join"
        name="mission"
        image="rocket.svg">
        <x-slot:title>
            {{ __('main.info-block-title-2') }}
        </x-slot:title>

        <span>{{ __('main.info-block-2') }}</span>
        <b>{{ __('main.info-block-2-1') }}</b>
        <span>{{ __('main.info-block-2-2') }}</span>
        <br>
        <hr>
        <span>{{ __('main.info-block-2-3') }}</span>
    </x-home.accordion-item>

    <x-home.accordion-item
        accordion="join"
        name="partnership"
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
            href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.partner')) }}">
            <button type="button"
                    class="btn btn-primary register">
                @svg('heroicon-m-arrow-long-right')
            </button>
        </a>
    </x-home.accordion-item>
</x-home.accordion>

<x-home.accordion
    accordion="about"
    class="left-accordions">
    <x-home.accordion-item
        accordion="about"
        name="description"
        image="group-new.svg">
        <x-slot:title>
            {{__('main.info-block-title-1')}}
        </x-slot:title>

        <p>{{ __('main.info-block-1') }}</p>
    </x-home.accordion-item>

    <x-home.accordion-item
        accordion="about"
        name="location"
        image="map.svg">
        <x-slot:title>
            {{ __('main.info-block-title-1-1') }}
        </x-slot:title>

        <p>{{ __('main.info-block-1-1') }}</p>
    </x-home.accordion-item>
</x-home.accordion>
