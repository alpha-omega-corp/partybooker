<div class="container bg-white shadow-lg">


    <h1 class="display-2 fw-bold text-uppercase text-center mt-5">
        {{__('main.title_home_h1')}}
    </h1>


    <div class="d-flex justify-content-center">
        <div class="d-flex home-subtitle text-uppercase">
            <h2 class="text-center fw-semibold">
                <span>{{__('main.title_home_h1-1')}}</span>
                <img src="{{Vite::image('icons/click.svg')}}" class="click-icon"
                     alt="{{ __('main.title_home_h1') }}"/>
                <span class="me-2">{{__('main.with')}}</span>
            </h2>
            <x-logo/>
        </div>
    </div>


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

                                    <h3 class="text-uppercase display-6 fw-bolder text-white">
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

    <div class="top-services-title">
        <div>
            <h2 class="display-2 fw-bold">
                {{ __('main.top_services')}}
            </h2>
        </div>
    </div>
</div>
