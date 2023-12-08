<div class="container shadow-lg">


    <div class="d-flex align-items-center justify-content-between main-title">
        <div>
            <x-logo/>
        </div>
        <div class="main-title-flex">
            <h1 class="fw-bold text-uppercase">
                {{__('main.organize')}}
                <span class="text-accent fw-semibold text-decoration-underline">{{__('main.your')}}</span>
                {{__('main.event')}}
            </h1>
            <div class="d-flex justify-content-between">
                <h4 class="text-uppercase fw-semibold m-2">
                    <span>{{__('main.title_home_h1-1')}}</span>
                    <img src="{{Vite::image('icons/click.svg')}}" class="click-icon"
                         alt="{{ __('main.title_home_h1') }}"/>
                </h4>

                <div class="d-flex flex-column main-title-href">
                    <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.listings'))}}">{{__('main.listing_page')}}</a>
                    <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale() . '/' . __('urls.aboutus'))}}">Concept</a>
                </div>
            </div>
        </div>
    </div>
    <div class="home-main-container">
        <section class="categories">
            <div class="items">
                <div class="container">

                    <h2 class="fw-bold text-uppercase text-center d-none">
                        {{ __('main.category')}}
                    </h2>

                    <div class="row d-sm-inline-flex justify-content-center mt-5 mb-5">
                        @foreach ($menuCats as $key => $category)
                            @php
                                $listKey = 'list-category-' . $key;
                                $listId = $listKey . '-list';

                            @endphp

                            <div class="scene scene--card ">
                                <div class="card shadow-lg">
                                    <div class="card__face card__face--front bg-shiny">

                                        <h3 class="text-uppercase fw-bolder text-white">
                                            {{ $category->lang->name }}
                                        </h3>


                                    </div>
                                    <div class="card__face card__face--back">


                                        <div class="sub-categories">
                                            <ul>
                                                @foreach ($category->subCategories as $subCategory)
                                                    <li>
                                                        <a class="fs-6"
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
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="accordion-section">
        @include('home.about')
    </section>

    <div class="top-services-title">
        <div>
            <h2 class="display-2 fw-bold">
                {{ __('main.top_services')}}
            </h2>
        </div>
    </div>
</div>
