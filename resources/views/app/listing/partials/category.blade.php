<div class="app-listing-category">
    <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
        {{ __('main.category') }}
    </h6>

    <ul class="list-group category-filters">
        @foreach ($categories as $category)
            <li class="list-group-item list-group-item-parent">
                <a href="{{url(route('guest.listing.index', ['category' => $category->locale->slug]))}}">
                    {{ $category->locale->title }}
                </a>
            </li>

            @foreach ($category->tags as $tag)
                @if($tag->locale)
                    <li class="list-group-item list-group-item-child">
                        <a class="link-underline link-underline-primary text-truncate"
                           href="{{url(route('guest.listing.index', [
                            'category' => $category->locale->slug,
                            'child' => $tag->locale->slug,
                            ]))}}"
                        >

                            {{$tag->locale->title}}
                        </a>
                    </li>
                @endif
            @endforeach
        @endforeach
    </ul>
</div>
