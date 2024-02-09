<div class="d-flex justify-content-center">
    <h2 class="fw-bold text-uppercase text-center d-none">
        {{ __('main.category')}}
    </h2>

    <div class="row d-sm-inline-flex justify-content-center">
        @foreach ($categories as $category)
            <div class="scene flippy">
                <div class="flippy shadow-lg">
                    <div class="flippy__face flippy__face--front bg-shiny">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">

                                @php
                                    $image = match ($category->service) {
                                        CategoryType::EVENT->value => 'location.svg',
                                        CategoryType::BUSINESS->value => 'bubble.svg',
                                        CategoryType::CATERER->value => 'catering.svg',
                                        CategoryType::WINE->value => 'wine.svg',
                                        CategoryType::EQUIPMENT->value => 'maintenance.svg',
                                        CategoryType::ENTERTAINMENT->value => 'confetti.svg',
                                    };
                                @endphp

                                <img src="{{Vite::category($image)}}" alt="..."/>
                            </div>

                            <h3 class="text-uppercase fw-bolder text-white">
                                {{$category->locale->first()->title}}
                            </h3>
                        </div>
                    </div>
                    <div class="flippy__face flippy__face--back">
                        <div class="category-children">
                            <ul>
                                @foreach($category->children as $child)
                                    @if($child->locale->first() && $category->locale->first())
                                        <li>
                                            <a href="{{route('guest.listing.index', [
                                                'category' => $category->locale->first()->slug,
                                                'child' => $child->locale->first()->slug
                                            ])}}">

                                                {{$child->locale->first()->title}}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

