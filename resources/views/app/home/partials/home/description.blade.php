<div class="description">
    <x-app.title
        :size="TitleSize::SMALL"
        :color="AppColor::PINK"
        :background="false"
        :border="false"
        :value="__('home.title')"
    />

    <x-app.title
        :size="TitleSize::MEDIUM"
        :color="AppColor::BLUE"
        :value="$content->title"
    />

    <div class="container">
        <p class="description-content">
            {{$content->content}}
        </p>
    </div>
</div>



