<div class="carousel__mobile">
    <x-app.title
        :size="TitleSize::MEDIUM"
        :color="AppColor::BLUE"
        :value="__('home.comments')"
        class="home-comment-title"
    />

    <x-app.section class="carousel__mobile-content">
        @foreach($commentsValue as $comment)
            <x-utils.comment :comment="$comment"/>
        @endforeach
    </x-app.section>
</div>
