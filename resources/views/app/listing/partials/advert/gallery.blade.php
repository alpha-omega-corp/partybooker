<x-card
    :can-open="false"
    :center="true"
    class="advert-gallery"
>
    <div class="advert-gallery-content">
        @foreach($advert->images()->get() as $image)
            <div class="gallery-image">
                <img src="{{$image->path}}" alt="...">
            </div>
        @endforeach
    </div>
</x-card>




