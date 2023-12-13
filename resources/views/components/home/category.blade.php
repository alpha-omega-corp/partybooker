@props([
    'category'
])

<div class="scene scene--card">
    <div class="card shadow-lg">
        <div class="card__face card__face--front bg-shiny">

            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center">
                    @switch($category->form_name)
                        @case('event-place')
                            @if(str_contains(strtolower($category->lang->name), 'pro') || str_contains(strtolower($category->lang->name), 'business'))
                                <img src="{{Vite::image('icons/bubble.svg')}}" alt="location-pro"/>
                            @else
                                <img src="{{Vite::image('icons/location.svg')}}" alt="location"/>
                            @endif
                            @break

                        @case('caterer')
                            <img src="{{Vite::image('icons/catering.svg')}}" alt="catering"/>
                            @break

                        @case('wine')
                            <img src="{{Vite::image('icons/wine.svg')}}" alt="catering"/>
                            @break

                        @case('equipment')
                            <img src="{{Vite::image('icons/maintenance.svg')}}" alt="catering"/>
                            @break

                        @case('entertainment')
                            <img src="{{Vite::image('icons/confetti.svg')}}" alt="catering"/>
                            @break

                    @endswitch
                </div>

                <h3 class="text-uppercase fw-bolder text-white">
                    {{ $category->lang->name }}
                </h3>
            </div>

        </div>
        <div class="card__face card__face--back">

            <div class="sub-categories">
                <ul class="d-flex flex-wrap">
                    @foreach ($category->subCategories as $subCategory)
                        <li>
                            <a class="p-2"
                               href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . $category->lang->slug . '/' . $subCategory->lang->slug) }}">
                                {{ $subCategory->lang->name }}
                            </a>
                        </li>
                    @endforeach


                </ul>
            </div>
        </div>
    </div>
</div>
