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

<div class="carousel__mobile">

    <x-app.title
        :size="TitleSize::MEDIUM"
        :color="AppColor::BLUE"
        :background="true"
        :value="__('home.information')"
        class="home-information-title"
    />

    @foreach($information as $item)
        @if($item->locale)
            <x-utils.information :information="$item"/>
        @endif
    @endforeach
</div>
