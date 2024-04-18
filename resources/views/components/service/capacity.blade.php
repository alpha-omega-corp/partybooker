@props([
    'content'
])

<x-card :title="__('service.section.capacity')" :can-open="false">
    <x-slot:body>
        <div class="d-flex justify-content-between">
            <p>{{__('advert.min_guests')}}</p>
            <p>{{$content->min_guests}}</p>
        </div>

        <div class="d-flex justify-content-between">
            <p>{{__('advert.max_guests')}}</p>
            <p>{{$content->max_guests}}</p>
        </div>
    </x-slot:body>
</x-card>
