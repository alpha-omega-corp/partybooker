<section class="home-comment">
    <x-carousel name="comments" :per-view="4" :bg="null">
        <x-slot:title>
            <div class="animation-down">
                <x-app.title
                    :size="TitleSize::MEDIUM"
                    :color="AppColor::BLUE"
                    :value="__('home.comments')"
                    class="home-comment-title"
                />
            </div>
        </x-slot:title>

        <x-slot:items>
            @foreach($comments as $comment)
                <x-carousel.item>
                    <div class="animation-grow">
                        <x-utils.comment :comment="$comment"/>
                    </div>
                </x-carousel.item>
            @endforeach
        </x-slot:items>
    </x-carousel>

    @include('app.home.partials.carousel-mobile.comment', [
        'commentsValue' => $comments,
    ])

    <x-app.mobile-more :modal="ModalName::MORE_COMMENTS" :items="$comments"/>
</section>

