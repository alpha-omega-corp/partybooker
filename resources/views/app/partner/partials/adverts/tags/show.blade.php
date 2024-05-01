<div class="advert-tags-header">
    @svg($boxIcon)

    <div class="d-flex gap-1">
        <span>{{$advert->tags->count()}}</span>/
        <span class="fw-bold text-blue">{{$plan->tag_count}}</span>
    </div>
</div>

<ul class="advert-tags-content">
    @foreach($advert->tags as $pivot)
        <li>
            <div class="d-flex justify-content-end align-items-center gap-1">
                <span>{{$pivot->tag->locale->title}}</span>
                <x-modal.open
                    :iterator="$advert->id.$pivot->tag->id"
                    :name="ModalName::PARTNER_ADVERT_TAG"
                    :type="ModalType::DELETE"
                    :icon="$deleteIcon"
                />
            </div>

            @include('app.partner.partials.adverts.tags.delete', [
                'tag' => $pivot->tag,
            ])
        </li>
    @endforeach
</ul>
