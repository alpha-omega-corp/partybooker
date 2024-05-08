<x-carousel
    name="information"
    :per-view="4"
>
    <x-slot:title>
        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :value="__('home.information')"
            class="home-information-title"
        />
    </x-slot:title>

    <x-slot:items>
        @foreach($information as $item)
            @if($item->locale)
                <x-carousel.item>
                    <x-utils.information :information="$item"/>
                </x-carousel.item>
            @endif
        @endforeach
    </x-slot:items>
</x-carousel>

@include('app.home.partials.carousel-mobile.information', [
    'informationValue' => $information,
])
<x-app.mobile-more :modal="ModalName::MORE_INFORMATION" :items="$information"/>
