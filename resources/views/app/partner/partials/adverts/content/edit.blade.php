@php($service = strtolower(CategoryType::from($advert->service->serviceable_type)->name))

<a
    class="btn text-info modal-absolute"
    href="{{route('partner.advert.service.' . $service, [
    'advert' => $advert
])}}">
    @svg('heroicon-o-pencil')
</a>





