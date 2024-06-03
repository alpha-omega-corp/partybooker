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
            {{$description->content}}
        </p>
    </div>
</div>



