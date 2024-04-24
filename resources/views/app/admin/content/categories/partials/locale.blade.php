@foreach($categories as $category)
    @php($categoryLink = route(__('route.listing'), ['category' => $category->locale->slug]))

    <div class="admin-category-card" x-data="{show: false}">
        <div class="category-card-header">
            <h5 class="category-card-title">
                {{$category->locale->title}}
            </h5>

            <a class="category-card-link" href="{{$categoryLink}}">
                {{ $categoryLink }}
            </a>

            <p>{{$category->locale->description}}</p>
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
                        @php($tagLink = route(__('route.listing'), [
                            'categories' => $category->locale->slug,
                            'child' => $tag->locale->slug,
                        ]))

                        <li>
                            {{$tag->locale->title}}
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
