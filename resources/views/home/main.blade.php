<div class="container shadow-lg">

    <div class="main-title">
        <div class="d-flex justify-content-center">
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
                        @foreach ($categories as $key => $category)
                            @php
                                $listKey = 'list-category-' . $key;
                                $listId = $listKey . '-list';
                            @endphp

                            <x-home.category :category="$category"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="top-services-title">
        <div>
            <h2 class="display-2 fw-bold">
                {{ __('main.top_services')}}
            </h2>
        </div>
    </div>
</div>
