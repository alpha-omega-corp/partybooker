<h2>
    {{__('main.more_info')}}
</h2>

<div class="home-information-cards">

    <x-accordion name="join">
        <x-accordion.item
            accordion="join"
            name="mission"
            :show="true"
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

        <x-accordion.item
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
                href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . 'accordions.blade.php/' . __('urls.partner')) }}">
                <button type="button"
                        class="btn btn-primary register">
                    @svg('heroicon-m-arrow-long-right')
                </button>
            </a>
        </x-accordion.item>

    </x-accordion>

    <x-accordion name="who">
        <x-accordion.item
            accordion="who"
            name="description"
            image="group-new.svg">
            <x-slot:title>
                {{__('main.info-block-title-1')}}
            </x-slot:title>

            <p>{{ __('main.info-block-1') }}</p>
        </x-accordion.item>


        <x-accordion.item
            accordion="who"
            name="location"
            :show="true"
            image="group-map.svg">
            <x-slot:title>
                {{ __('main.info-block-title-1-1') }}
            </x-slot:title>

            <p>{{ __('main.info-block-1-1') }}</p>
        </x-accordion.item>

    </x-accordion>
</div>
