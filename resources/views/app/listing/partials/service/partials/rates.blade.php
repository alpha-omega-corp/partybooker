<x-card :title="__('service.section.price.rates')" :can-open="false" class="w-100">
    @if($advert->service->rate->prices)
        @foreach($advert->service->rate->prices as $price)
            <div class="service-rates-card">
                <div class="rates-card-content">
                    <p>
                        {{$price['description']}}
                    </p>
                </div>

                <div class="rates-card-tag">
                    <span>{{$price['price']}} CHF</span>
                </div>
            </div>
        @endforeach
    @endif

</x-card>
