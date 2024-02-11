<x-carousel name="comments" :container="true">
    <x-slot:title>
        <h2>
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
