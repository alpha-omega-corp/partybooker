@php($service = strtolower(CategoryType::from($advert->service->serviceable_type)->name))

<a
    class="btn text-white w-100 bg-info rounded-0"
    href="{{route('partner.advert.service.' . $service, [
    'advert' => $advert
])}}">
    @svg('heroicon-o-pencil')
</a>





