@props([
    'content'
])

<x-advert.service :title="__('service.section.capacity')">
    <div>
        <div class="d-flex justify-content-between">
            <p>{{__('advert.min_guests')}}</p>
            <p class="text-pink fw-bold">{{$content->min_guests}}</p>
        </div>

        <div class="d-flex justify-content-between">
            <p>{{__('advert.max_guests')}}</p>
            <p class="text-pink fw-bold">{{$content->max_guests}}</p>
        </div>
    </div>
</x-advert.service>
