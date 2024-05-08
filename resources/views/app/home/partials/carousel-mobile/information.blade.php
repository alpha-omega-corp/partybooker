<div class="carousel__mobile">
    <x-app.title
        :size="TitleSize::MEDIUM"
        :color="AppColor::BLUE"
        :value="__('home.information')"
        class="home-information-title"
    />

    <x-app.section class="carousel__mobile-content">
        @foreach($informationValue as $item)
            @if($item->locale)
                <x-utils.information :information="$item"/>
            @endif
        @endforeach
    </x-app.section>
</div>
