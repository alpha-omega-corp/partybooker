<li class="category-tag">
    <a class="tag-link"
       href="{{route(__('route.listing'), [
            'category' => $category->locale->slug,
            'tag' => $tag ? $tag->locale->slug : $tag,
        ])}}"
    >
        {{$tag ? $tag->locale->title : ucfirst(__('listing.category.all'))}}
    </a>
</li>
