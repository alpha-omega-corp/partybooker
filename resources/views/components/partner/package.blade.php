@props([
    'plan',
])


<div class="package position-relative shadow-lg "
     x-data="{plan: '{{$plan->stripe_price_id}}', name: '{{$plan->name}}'}"
     @click="subscribe(plan, name)">
    <div class="text-uppercase text-center">
        <h3 class="fw-bold p-2 {{ 'text-' . $plan->name }} fw-bold">{{ __('plan.' . $plan->name) }}</h3>
    </div>
    <hr>

    <ul>
        <li>
            <img src="{{ Vite::image('network.svg') }}" alt="network"/>
            <div class="package-categories {{ 'text-' . $plan->name }} fw-bold">
                {{ __('become_partner.direct_request') }}
            </div>
        </li>

        <li>
            <img src="{{ Vite::image('picture.svg') }}" alt="picture"/>

            <div class="package-categories {{ 'text-' . $plan->name }} fw-bold">
                {{ $plan->photos_num }}
                {{ __('become_partner.photos') }}
            </div>
        </li>

        @if ($plan->video == 0)
            <li>
                <img src="{{ Vite::image('video-player.svg') }}" alt="video"/>

                <div class="package-categories {{ 'text-' . $plan->name }} fw-bold">
                    {{ __('become_partner.video') }}
                </div>
            </li>
        @endif
    </ul>

    <div class="package-cat-list">
        <div class="d-flex flex-column w-100">
            @foreach ($plan->options as $key => $option)
                <div class="d-flex">
                    <h6 class="text-uppercase fw-bold p-2 m-0">{{$key .'#'}}</h6>
                    @foreach($option as $package)
                        <div class="package-categories border {{ 'border-' . $plan->name }}">
                            {{$package->categories_count . ' ' . __('become_partner.categories')}}
                            {{$package->sub_categories_count . ' ' . __('become_partner.sub_category')}}
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <hr>

        <div class="d-flex">
            <div class="w-100">
                <p>
                    <span class="fw-bold {{'text-' . $plan->name}} fs-3">{{ $plan->price }}</span>
                    <span class="p-1 package-price">CHF {{ __('become_partner.per_year') }}</span>
                </p>
            </div>

            <div class="d-flex justify-content-end align-items-center w-100">
                @svg('heroicon-o-credit-card', 'package-credit-card')
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="position-absolute bottom-0">
            {{$slot}}
        </div>
    </div>
</div>



