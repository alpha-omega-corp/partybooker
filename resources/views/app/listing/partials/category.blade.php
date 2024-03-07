<div class="app-listing-category">
    <ul class="list-group category-filters">
        @foreach ($categories as $category)
            <li class="list-group-item list-group-item-parent">
                <a href="{{route('guest.listing.index', ['category' => $category->locale->slug])}}">
                    {{ $category->locale->title }}
                </a>
            </li>

            @foreach ($category->tags as $tag)
                @if($tag->locale)
                    <li class="list-group-item list-group-item-child">
                        <a class="link-underline link-underline-primary text-truncate"
                           href="{{route('guest.listing.index', [
                            'category' => $category->locale->slug,
                            'child' => $tag->locale->slug,
                            ])}}"
                        >

                            {{$tag->locale->title}}
                        </a>
                    </li>
                @endif
            @endforeach
        @endforeach
    </ul>
</div>
