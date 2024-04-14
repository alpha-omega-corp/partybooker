<x-carousel name="comments" :per-view="3">
    <x-slot:title>
        <x-app.title
            :size="TitleSize::MEDIUM"
            :color="AppColor::PINK"
            :value="__('home.comments')"
            class="home-comment-title"
        />
    </x-slot:title>

    <x-slot:items>
        @foreach($comments as $comment)
            <x-carousel.item>
                <x-utils.comment :comment="$comment"/>
            </x-carousel.item>
        @endforeach
    </x-slot:items>
</x-carousel>


<div class="carousel__mobile">
    <x-app.title
        :size="TitleSize::MEDIUM"
        :color="AppColor::PINK"
        :value="__('home.comments')"
        class="home-comment-title"
    />

    @foreach($commentsRandom as $comment)
        <x-utils.comment :comment="$comment"/>
    @endforeach

    <x-app.mobile-more :route="route('guest.home.index')"/>
</div>
