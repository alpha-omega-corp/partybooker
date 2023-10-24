@props(['plan'])

<div class="package position-relative">
    <div class="text-uppercase text-center ">
        @if($plan->price === 0)
            <h3 class="fw-bold text-uppercase p-2 text-gray">{{ $plan->name }}</h3>
        @else
            <h3 class="fw-bold p-2 {{ 'text-' . $plan->name }}">{{ __('plan.' . strtolower($plan->name)) }}</h3>
        @endif
    </div>

    <ul>
        <li>
            <div class="d-flex">
                <img src="{{ Vite::image('options.svg') }}" alt="category"/>
                @foreach ($plan->options as $option)
                    @foreach($option as $package)
                        <div>
                            {{$package->categories_count . ' ' . __('become_partner.category')}}
                            {{$package->sub_categories_count . ' ' . __('become_partner.sub_category')}}
                            @if (!$loop->last)
                                <span>or</span>
                            @endif
                        </div>

                    @endforeach
                @endforeach
            </div>
        </li>

        <li>
            <img src="{{ Vite::image('picture.svg') }}" alt="picture"/>

            <span>{{ $plan->photos_num }}
                {{ __('become_partner.photos') }}</span>
        </li>
        @if ($plan->video == 1)
            <li>
                <img src="{{ Vite::image('video-player.svg') }}" alt="video"/>
                <span>{{ __('become_partner.video') }}</span>
            </li>
        @endif
        @if ($plan->direct_request == 1)
            <li>
                <img src="{{ Vite::image('network.svg') }}" alt="network"/>

                <span>{{ __('become_partner.direct_request') }}</span>
            </li>
        @endif
    </ul>
    <div class="pricing">
        <span class="amount">CHF {{ $plan->price }}</span>
        <span>{{ __('become_partner.per_year') }}</span>
    </div>
</div>

