<x-card
    :can-open="false"
    :title="__('advert.gallery')"
    class="advert-gallery"
>
    <div class="advert-gallery-content">
        @foreach($advert->images()->get() as $image)
            @if(!$image->is_thumbnail)
                <div class="gallery-image">
                    <img src="{{asset($image->path)}}" alt="...">
                </div>
            @endif
        @endforeach
    </div>
</x-card>




