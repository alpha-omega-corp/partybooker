<div class="advert-gallery-count">
    <div class="gallery-count">
        @svg('heroicon-o-photo')

        <div class="d-flex gap-1">
            <span>{{count($advert->images()->get())}}</span>/
            <span class="fw-bold text-blue">{{$plan->upload_count}}</span>
        </div>

    </div>
</div>

<div class="partner-advert-gallery">
    @foreach($advert->images()->get() as $image)

        @include('app.partner.partials.adverts.gallery.delete')
        @include('app.partner.partials.adverts.gallery.edit')

        <div class="advert-gallery-item">
            <img src="{{asset($image->path)}}" alt="...">

            <div class="gallery-image-actions">
                <x-modal.open
                    :iterator="$image->id"
                    :name="ModalName::PARTNER_ADVERT_IMAGE"
                    :type="ModalType::DELETE"
                    :automatic="true"
                    :background="true"
                />

                <x-modal.open
                    :iterator="$image->id"
                    :name="ModalName::PARTNER_ADVERT_IMAGE"
                    :type="ModalType::UPDATE"
                    :automatic="true"
                    :background="true"
                />

                <form method="POST" action="{{route('partner.advert.gallery.thumbnail', ['image' => $image])}}">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="tippy btn btn-orange" data-tippy-content="set as thumbnail">
                        @svg($titleIcon, 'text-white')
                    </button>
                </form>

            </div>
        </div>
    @endforeach
</div>
