<div class="app-listing-category">
    <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
        {{ __('main.category') }}
    </h6>

    <ul class="list-group category-filters">
        @foreach ($categories as $item)
            <li class="list-group-item list-group-item-parent">
                <a href="{{url(route('guest.listing.index', ['category' => $item->locale->first()->slug]))}}">
                    {{ $item->locale->first()->title }}
                </a>
            </li>

            @foreach ($item->children()->get() as $child)
                @if($child->locale->first())
                    <li class="list-group-item list-group-item-child ">
                        <a class="link-underline link-underline-primary text-truncate"
                           href="{{url(route('guest.listing.index', [
                                        'child' => $child->locale->first()->slug,
                                        'category' => $item->locale->first()->slug
                                    ]))}}">
                            {{$child->locale->first()->title}}
                        </a>
                    </li>
                @endif
            @endforeach
        @endforeach
    </ul>
</div>
