<x-app.group class="home-top">

    <x-carousel name="tops" :per-view="4">
        <x-slot:title>
            @if($showTitle)

            @endif
        </x-slot:title>

        <x-slot:items>
            @foreach ($top as $item)
                <x-carousel.item>
                    <x-utils.top :partner="$item"/>
                </x-carousel.item>
            @endforeach
        </x-slot:items>
    </x-carousel>

</x-app.group>
