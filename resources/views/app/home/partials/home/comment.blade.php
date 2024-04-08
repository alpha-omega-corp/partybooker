<x-carousel name="comments" :container="true">
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
