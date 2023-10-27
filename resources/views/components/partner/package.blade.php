@props([
    'plan',
    'priceId'
])

<div class="package-z-cover">
    <div class="package position-relative shadow-lg" x-data="{plan: '{{$priceId}}', name: '{{$plan->name}}'}"
         @click="subscribe(plan, name)">
        <div class="text-uppercase text-center">
            <h3 class="fw-bold p-2 {{ 'text-' . $plan->name }}">{{ __('plan.' . strtolower($plan->name)) }}</h3>
        </div>

        <ul>
            <li>
                <img src="{{ Vite::image('network.svg') }}" alt="network"/>
                <div class="package-categories">
                    {{ __('become_partner.direct_request') }}
                </div>
            </li>


            <li>
                <img src="{{ Vite::image('picture.svg') }}" alt="picture"/>

                <div class="package-categories">
                    {{ $plan->photos_num }}
                    {{ __('become_partner.photos') }}
                </div>
            </li>

            @if ($plan->video == 0)
                <li>
                    <img src="{{ Vite::image('video-player.svg') }}" alt="video"/>

                    <div class="package-categories">
                        {{ __('become_partner.video') }}
                    </div>

                </li>
            @endif
        </ul>

        <hr>

        <div class="package-cat-list">
            <div class="d-flex flex-column w-100">
                @foreach ($plan->options as $key => $option)
                    <div class="d-flex">
                        <h6 class="text-uppercase fw-bold p-2 m-0">{{$key .'#'}}</h6>
                        @foreach($option as $package)
                            <div class="package-categories">
                                {{$package->categories_count . ' ' . __('become_partner.category')}}
                                {{$package->sub_categories_count . ' ' . __('become_partner.sub_category')}}
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>


        <div class="d-flex justify-content-center">
            <div class="position-absolute bottom-0">
                {{$slot}}
            </div>
        </div>
    </div>
</div>


