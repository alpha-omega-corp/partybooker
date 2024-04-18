<x-card :title="__('advert.description')" :can-open="false" class="service-description">
    <x-slot:body>
        <p>{{$advert->locale->description}}</p>
    </x-slot:body>
</x-card>

