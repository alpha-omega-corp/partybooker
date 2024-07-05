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
            <div class="container">
                <x-app.title
                    :size="TitleSize::MEDIUM"
                    :color="AppColor::BLUE"
                    :value="$description->title"
                    :padding="true"
                />
                <div class="description-content">
                    {!! $description->content !!}
                </div>
            </div>
        </div>
    </div>
    @include('app.home.partials.home.category')

</section>
