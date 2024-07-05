<x-card
    :can-open="false"
    :title="__('advert.gallery')"
    class="app-advert-gallery"
    :radius="true"
>
    <div class="advert-gallery-content">
        @foreach($advert->images()->get() as $image)
            <div class="gallery-image">
                <img src="{{asset($image->path)}}" alt="{{$image->locale->description}}">
            </div>
        @endforeach
    </div>
</x-card>




