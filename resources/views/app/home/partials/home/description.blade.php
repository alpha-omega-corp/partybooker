<div class="container">
    <div class="description">

        <x-app.title
            :size="TitleSize::SMALL"
            :color="AppColor::PINK"
            :value="__('home.title')"
            class="p-4"
        />

        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::BLUE"
            :value="$content->title"
        />

        <p class="description-content">
            {{$content->content}}
        </p>
    </div>
</div>



