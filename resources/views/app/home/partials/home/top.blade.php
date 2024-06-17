<div class="home-top">
    <x-carousel name="tops" :per-view="4">
        <x-slot:title>
            @if($showTitle)

                <x-app.title
                    :size="TitleSize::MEDIUM"
                    :color="AppColor::BLUE"
                    :value="__('home.tops')"
                    class="home-top-title"
                    :border="false"
                    :background="false"
                />

            @endif
        </x-slot:title>

        <x-slot:items>
            @foreach ($top as $item)
                <x-carousel.item>
                    <div class="animation-grow">
                        <x-utils.top :partner="$item"/>
                    </div>
                </x-carousel.item>
            @endforeach
        </x-slot:items>
    </x-carousel>

    @include('app.home.partials.carousel-mobile.top', [
        'topValue' => $top->random(4),
    ])
    <x-app.mobile-more :modal="ModalName::MORE_TOPS" :items="$top"/>
</div>
