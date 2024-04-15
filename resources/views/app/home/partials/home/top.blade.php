@if (count($top))
    <x-carousel name="tops" :per-view="4">
        <x-slot:title>
            <x-app.title
                :size="TitleSize::MEDIUM"
                :color="AppColor::PINK"
                :value="__('home.tops')"
                class="home-top-title"
            />
        </x-slot:title>

        <x-slot:items>
            @foreach ($top as $item)
                <x-carousel.item>
                    <x-utils.top :partner="$item"/>
                </x-carousel.item>
            @endforeach
        </x-slot:items>
    </x-carousel>

    <div class="carousel__mobile">

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::PINK"
            :value="__('home.tops')"
            class="home-top-title"
        />

        <div class="carousel__mobile-content">
            @foreach ($topRandom as $item)
                <div class="mobile-top-card">
                    <x-utils.top :partner="$item"/>
                </div>
            @endforeach
        </div>

        <x-app.mobile-more :route="route('guest.home.index')"/>
    </div>

@endif
