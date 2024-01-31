@props([
    'category'
])

<div class="scene scene--card">
    <div class="card shadow-lg">
        <div class="card__face card__face--front bg-shiny">

            <div class="d-flex flex-column">
                <div class="d-flex justify-content-center">
                    @switch($category->service)
                        @case(CategoryType::EVENT->value)
                            <img src="{{Vite::image('icons/location.svg')}}" alt="location"/>
                            @break

                        @case(CategoryType::BUSINESS->value)
                            <img src="{{Vite::image('icons/bubble.svg')}}" alt="location-pro"/>
                            @break

                        @case(CategoryType::CATERER->value)
                            <img src="{{Vite::image('icons/catering.svg')}}" alt="catering"/>
                            @break

                        @case(CategoryType::WINE->value)
                            <img src="{{Vite::image('icons/wine.svg')}}" alt="catering"/>
                            @break

                        @case(CategoryType::EQUIPMENT->value)
                            <img src="{{Vite::image('icons/maintenance.svg')}}" alt="catering"/>
                            @break

                        @case(CategoryType::ENTERTAINMENT->value)
                            <img src="{{Vite::image('icons/confetti.svg')}}" alt="catering"/>
                            @break

                    @endswitch
                </div>

                <h3 class="text-uppercase fw-bolder text-white">
                    {{$category->translates->first()->title}}
                </h3>
            </div>

        </div>
        <div class="card__face card__face--back">

            <div class="sub-categories">
                <ul class="d-flex flex-wrap">
                    <li>
                        <a class="p-2"
                           href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings') . '/' . "category->lang->slug" . '/' . "subCategory->lang->slug") }}">
                            Subname
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
