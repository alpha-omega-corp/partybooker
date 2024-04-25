<x-card
    :can-open="false"
    :title="__('advert.gallery')"
    class="advert-gallery"
>
    <div class="advert-gallery-content">
        @foreach($advert->images()->get() as $image)
            <div class="gallery-image">
                <img src="{{asset($image->path)}}" alt="...">
            </div>
        @endforeach
    </div>
</x-card>




