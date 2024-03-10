<div class="app-listing-category">
    <ul class="list-group">
        <x-accordion name="listing">
            @foreach ($categories as $key => $category)
                <x-accordion.item
                    accordion="listing"
                    :name="$category->id"
                    :show="$active ? $active === $category->id : $key === 0"
                >
                    <x-slot:title>
                        {{ $category->locale->title }}
                    </x-slot:title>

                    <li class="category-tag">
                        <a href="{{route('guest.listing.index', ['category' => $category->locale->slug])}}"
                           class="link-underline link-underline-primary">
                            {{ $category->locale->title }}
                        </a>
                    </li>

                    @foreach ($category->tags as $tag)
                        @if($tag->locale)
                            <li class="category-tag">
                                <a class="link-underline link-underline-primary text-truncate"
                                   href="{{route('guest.listing.index', [
                                    'category' => $category->locale->slug,
                                    'child' => $tag->locale->slug,
                                ])}}">
                                    {{$tag->locale->title}}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </x-accordion.item>
            @endforeach
        </x-accordion>
    </ul>
</div>
