@php($service = strtolower(CategoryType::from($advert->service->serviceable_type)->name))

<a
    class="tippy text-orange btn"
    data-tippy-content="{{__('advert.content')}}"
    href="{{route('partner.advert.service.' . $service, [
    'advert' => $advert
])}}">
    @svg('heroicon-o-information-circle')
</a>

