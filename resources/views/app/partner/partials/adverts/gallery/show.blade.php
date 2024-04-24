<div class="advert-gallery-count">
    <div class="gallery-count">
        @svg('heroicon-o-photo')
        {{count($advert->images()->get()). '/'. $plan->upload_count}}
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
            </div>
        </div>
    @endforeach
</div>
