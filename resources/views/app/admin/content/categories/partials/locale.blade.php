@foreach($categories as $category)
    @php($locale = $category->ofLang($lang)->first()->locale)
    @php($categoryLink = route('guest.listing.index', ['category' => $locale->slug]))

    <div class="admin-category-card" x-data="{show: false}">
        <div class="category-card-header">
            <h5 class="category-card-title">
                {{$locale->title}}
            </h5>

            <a class="category-card-link" href="{{$categoryLink}}">
                {{ $categoryLink }}
            </a>

            <p>{{$locale->description}}</p>
        </div>

        <x-modal.open
            :iterator="$category->id"
            :name="ModalName::APP_CATEGORY"
            :type="ModalType::UPDATE"
            :automatic="true"
            :absolute="true"
        />

        <ul class="category-card-tags" x-show="show" x-bind:class="show ? 'border-start' : ''">
            @foreach($category->tags as $tag)
                @if($tag->locale)
                    <div class="card-tag-content">
                        @php($tagLocale = $tag->ofLang($lang)->first()->locale)
                        @php($tagLink = route('guest.listing.index', [
                            'categories' => $category->locale->slug,
                            'child' => $tag->locale->slug,
                        ]))

                        <li>
                            {{$tagLocale->title}}
                        </li>

                        <x-modal.open
                            :iterator="$tag->id"
                            :name="ModalName::APP_CATEGORY_TAG"
                            :type="ModalType::UPDATE"
                            :absolute="true"
                            :automatic="true"
                        />
                    </div>
                @endif
            @endforeach
        </ul>
        <div class="card-show" @click="show = !show">
            <div>
                <a x-show="!show">{{__('card.show')}}</a>
                <a x-show="show">{{__('card.close')}}</a>
            </div>
        </div>

    </div>
@endforeach
