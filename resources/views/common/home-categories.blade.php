<div class="items">
    <div class="container">

        <h2 class="fw-bold text-uppercase text-center">
            {{ __('main.category')}}
        </h2>

        <div class="row d-sm-inline-flex justify-content-center mt-5">
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
