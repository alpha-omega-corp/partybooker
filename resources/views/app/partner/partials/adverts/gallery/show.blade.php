<div class="advert-gallery-count">
    <div class="gallery-count">
        @svg('heroicon-o-photo')
        <div class="">{{count($advert->images()->get()). '/'. $plan->uploads}}</div>
    </div>
</div>

<div class="partner-advert-gallery row">

    @foreach($advert->images()->get() as $image)
        <div class="col-4">
            @include('app.partner.partials.adverts.gallery.delete')
            @include('app.partner.partials.adverts.gallery.edit')

            <div class="advert-gallery-item">
                <img src="{{asset($image->path)}}" alt="...">

                <div class="gallery-image-actions">
                    <x-modal.open
                        :name="ModalName::PARTNER_ADVERT_IMAGE"
                        :type="ModalType::DELETE"
                        :index="$image->id"
                    >
                        <button type="button" class="btn btn-danger tippy" @click="open" data-tippy-content="delete">
                            @svg($deleteIcon)
                        </button>
                    </x-modal.open>

                    <x-modal.open
                        :name="ModalName::PARTNER_ADVERT_IMAGE"
                        :type="ModalType::UPDATE"
                        :index="$image->id"
                    >
                        <button type="button" class="btn btn-standard tippy" @click="open" data-tippy-content="edit">
                            @svg($editIcon)
                        </button>
                    </x-modal.open>
                </div>

            </div>
        </div>
    @endforeach
</div>
