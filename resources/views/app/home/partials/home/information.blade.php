<section class="home-information">
    <x-carousel
        name="information"
        :per-view="4"
    >
        <x-slot:title>
            <div class="animation-down">
                <x-app.title
                    :size="TitleSize::MEDIUM"
                    :color="AppColor::BLUE"
                    :value="__('home.information')"
                    class="home-information-title"
                />
            </div>
        </x-slot:title>

        <x-slot:items>
            @foreach($information as $item)
                @if($item->locale)
                    <x-carousel.item>
                        <div class="animation-grow">
                            <x-utils.information :information="$item"/>
                        </div>
                    </x-carousel.item>
                @endif
            @endforeach
        </x-slot:items>
    </x-carousel>

    @include('app.home.partials.carousel-mobile.information', [
        'informationValue' => $information,
    ])
    <x-app.mobile-more :modal="ModalName::MORE_INFORMATION" :items="$information"/>
</section>
