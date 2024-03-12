<h2 class="fw-bold text-uppercase text-center d-none">
    {{ __('main.categories')}}
</h2>
<div class="row">
    @foreach ($categories as $category)
        <div class="col scene flippy">
            <div class="flippy shadow-lg">
                <div class="flippy__face flippy__face--front">

                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        @php
                            $icon = match ($category->service) {
                                CategoryType::EVENT->value => 'heroicon-s-map-pin',
                                CategoryType::CATERER->value => 'heroicon-s-cake',
                                CategoryType::WINE->value => 'heroicon-s-trophy',
                                CategoryType::EQUIPMENT->value => 'heroicon-s-shopping-cart',
                                CategoryType::ENTERTAINMENT->value => 'heroicon-s-musical-note',
                            };
                        @endphp

                        <div class="category-icon">
                            @svg($icon)
                        </div>

                        <h3 class="category-title">
                            {{$category->locale->title}}
                        </h3>
                    </div>


                </div>
                <div class="flippy__face flippy__face--back">
                    <div class="category-tags">
                        <ul>
                            @foreach($category->tags as $tag)
                                @if($tag->locale && $category->locale)
                                    <li>
                                        <a href="{{route('guest.listing.index', [
                                                'category' => $category->locale->slug,
                                                'child' => $tag->locale->slug
                                            ])}}">

                                            {{$tag->locale->title}}
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
