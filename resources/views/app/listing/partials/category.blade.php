<div class="app-listing-category">
    <ul class="list-group">
        <x-accordion name="listing">
            @foreach ($categories as $key => $category)
                <x-accordion.item
                    accordion="listing"
                    :name="$category->id"
                    :show="$active ? $active->id === $category->id : $key === 0"
                >
                    <x-slot:title>
                        {{ $category->locale->title }}
                    </x-slot:title>

                    <x-slot:content>
                        <div class="listing-category-tags">
                            <x-advert.tag
                                :category="$category"
                                :tag="null"
                            />

                            @foreach ($category->tags as $tag)
                                @if($tag->locale)
                                    <x-advert.tag
                                        :category="$category"
                                        :tag="$tag"
                                    />
                                @endif
                            @endforeach
                        </div>
                    </x-slot:content>
                </x-accordion.item>
            @endforeach
        </x-accordion>
    </ul>
</div>
