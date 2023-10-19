<h2 class="fw-bold text-center">
    {{__('main.title_home_h2')}}
</h2>

<div class="d-flex justify-content-center">
    <div class="d-sm-flex flex-sm-column d-lg-flex flex-lg-row">
        <div class="home-description shadow-lg">
            <h4 class="fw-bold text-uppercase text-center">
                <img src="{{Vite::image('who-icon.svg')}}" alt="{{ __('main.info-block-title-1') }}"/>
                {{ __('main.info-block-title-1') }}
            </h4>
            <hr>
            <p>{{ __('main.info-block-1') }}<p>
        </div>

        <div class="home-description shadow-lg">
            <h4 class="fw-bold text-uppercase text-nowrap text-center">
                <img src="{{Vite::image('swiss-army-knife.svg')}}" alt="{{ __('main.info-block-title-1') }}"/>
                {{ __('main.info-block-title-1-1') }}
            </h4>
            <hr>
            <p>{{ __('main.info-block-1-1') }}<p>
        </div>
    </div>
</div>
