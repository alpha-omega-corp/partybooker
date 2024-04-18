<x-card.service :title="__('service.section.price.budget.deposit')" :padding="true">
    @if($advert->service->rate->has_deposit)
        {{$advert->service->rate->deposit_description}}
    @else
        {{__('advert.no_deposit')}}
    @endif
</x-card.service>
