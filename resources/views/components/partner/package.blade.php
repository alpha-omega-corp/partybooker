@props(['plan'])
<div class="package position-relative shadow-lg">
    <div class="text-uppercase text-center">
        <h3 class="fw-bold p-2 {{ 'text-' . $plan->name }}">{{ __('plan.' . strtolower($plan->name)) }}</h3>
    </div>

    <ul>
        <li>
            <img src="{{ Vite::image('options.svg') }}" alt="category"/>
            @foreach ($plan->options as $key => $option)
                <h6 class="text-center text-uppercase">{{'option ' . $key}}</h6>
                <hr>
                <div class="d-flex flex-column">
                    @foreach($option as $package)
                        <div>
                            {{$package->categories_count . ' ' . __('become_partner.category')}}
                            {{$package->sub_categories_count . ' ' . __('become_partner.sub_category')}}
                        </div>
                    @endforeach
                </div>
            @endforeach
        </li>

        <li>
            <img src="{{ Vite::image('picture.svg') }}" alt="picture"/>

            <p>{{ $plan->photos_num }}
                {{ __('become_partner.photos') }}</p>
        </li>
        @if ($plan->video == 1)
            <li>
                <img src="{{ Vite::image('video-player.svg') }}" alt="video"/>
                <p>{{ __('become_partner.video') }}</p>
            </li>
        @endif
        @if ($plan->direct_request == 1)
            <li>
                <img src="{{ Vite::image('network.svg') }}" alt="network"/>
                <p>{{ __('become_partner.direct_request') }}</p>
            </li>
        @endif
    </ul>
    <div class="d-flex justify-content-center">
        <div class="position-absolute bottom-0">
            {{$slot}}
        </div>
    </div>
</div>

