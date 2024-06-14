<section class="home-welcome">

    <div class="home-welcome-bg">
        <img src="{{Vite::app('background.webp')}}" alt="{{__('app.catch-phrase')}}"/>

        <div class="home-welcome-header">
            <h1 class="home-welcome-title">
                <span>Party</span>
                <br>
                <span>Booker.ch</span>
            </h1>
        </div>
    </div>

    <div class="home-description">
        <div class="description">
            <x-app.title
                :size="TitleSize::SMALL"
                :color="AppColor::PINK"
                :background="false"
                :border="false"
                :padding="false"
                :value="__('home.title')"
                class="description-title"
            />

            <div class="container">
                <x-app.title
                    :size="TitleSize::MEDIUM"
                    :color="AppColor::BLUE"
                    :value="$description->title"
                    :padding="false"
                />
                <p class="description-content">
                    {!! $description->content !!}
                </p>
            </div>
        </div>
    </div>
    @include('app.home.partials.home.category')

</section>
