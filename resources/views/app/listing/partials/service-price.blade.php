<div class="service-price">
    <div class="d-flex gap-4">
        <div class="w-100">
            <x-card.service :title="__('service.section.price.rates')">
                @foreach($advert->service->rate->prices as $price)
                    <div class="service-price-card">
                        <div class="price-card-tag">
                            <span>{{$price['price']}} CHF</span>
                        </div>

                        <div class="price-card-content">
                            {{$price['description']}}
                        </div>
                    </div>
                @endforeach
            </x-card.service>
        </div>

        <div class="w-100">

            <x-card.service :title="__('service.section.price.payment')" :padding="true">
                <x-advert.form
                    :service="$advert->service"
                    :type="FormType::PAYMENT"
                />
            </x-card.service>

            <x-card.service :title="__('service.section.price.budget')" :padding="true">
                {{$advert->service->rate->budget}}
            </x-card.service>

            <x-card.service :title="__('service.section.price.budget.deposit')" :padding="true">
                @if($advert->service->rate->has_deposit)
                    {{$advert->service->rate->deposit_description}}
                @else
                    {{__('advert.no_deposit')}}
                @endif
            </x-card.service>
        </div>
    </div>


</div>
