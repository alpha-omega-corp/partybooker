<div class="carousel__mobile">
    <x-app.title
        :size="TitleSize::MEDIUM"
        :color="AppColor::BLUE"
        :value="__('home.tops')"
        class="home-top-title"
    />

    <x-app.section class="carousel__mobile-content">
        @foreach ($topValue as $item)
            <div class="mobile-top-card">
                <x-utils.top :partner="$item"/>
            </div>
        @endforeach
    </x-app.section>
</div>
