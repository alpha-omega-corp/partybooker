<x-card :title="__('service.section.price.rates')" :can-open="false" class="w-100">
    @foreach($advert->service->rate->prices as $price)
        <div class="service-price-card">
            <div class="price-card-content">
                <p>
                    {{$price['description']}}
                </p>
            </div>

            <div class="price-card-tag">
                <span>{{$price['price']}} CHF</span>
            </div>
        </div>
    @endforeach
</x-card>
