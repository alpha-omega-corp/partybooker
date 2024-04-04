<li class="link-underline link-underline-primary category-tag">
    <a class="tag-link"
       href="{{route('guest.listing.index', [
            'category' => $category->locale->slug,
            'tag' => $tag ? $tag->locale->slug : $tag,
        ])}}"
    >
        {{$tag ? $tag->locale->title : __('listing.category.all')}}
    </a>
</li>
