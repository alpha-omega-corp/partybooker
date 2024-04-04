<x-card :title="__('advert.gallery')" :can-open="false">
    <div class="advert-gallery">
        @foreach($advert->images()->get() as $image)
            <div class="col-12 mb-4 gallery-image gal-img">
                <img src="{{$image->path}}" alt="...">
            </div>
        @endforeach
    </div>
</x-card>
