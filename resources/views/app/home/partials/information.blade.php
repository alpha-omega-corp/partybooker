<x-carousel
    name="information"
    :per-view="4"
    :container="true">
    <x-slot:title>
        <h2 class="information-title">
            {{__('home.information')}}
        </h2>
    </x-slot:title>

    <x-slot:items>
        @foreach($information as $item)
            @if($item->locale)
                <x-carousel.item>
                    <x-utils.information :information="$item"/>
                </x-carousel.item>
            @endif

        @endforeach
    </x-slot:items>
</x-carousel>
