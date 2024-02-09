<x-carousel name="comments" :container="true">
    <x-slot:title>
        <h2 class="text-uppercase text-center display-5 fw-bold text-pink p-5">
            {{__('comments.title')}}
        </h2>
    </x-slot:title>

    <x-slot:items>
        @foreach($comments as $comment)
            <x-carousel.item>
                <x-utils.comment :comment="$comment"/>
            </x-carousel.item>
        @endforeach
    </x-slot:items>
</x-carousel>
