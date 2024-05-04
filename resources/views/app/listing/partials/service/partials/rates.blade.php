@if($advert->service->rate->prices)
    <x-card :title="__('service.section.price.rates')" :can-open="false" class="w-100" :radius="true">

        <div class="app-advert-rates">
            @foreach($advert->service->rate->prices as $price)
                <div class="service-rate-card">
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
        </div>
    </x-card>
@endif
