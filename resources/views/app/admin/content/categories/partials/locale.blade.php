<div class="admin-category-container">
    @foreach($categories as $category)
        @php($categoryLink = route(__('route.listing'), ['category' => $category->locale->slug]))

        <x-card :title="$category->locale->title" :can-open="false" :actionable="true" class="admin-category-card">
            <div class="category-card-link">
                <a href="{{$categoryLink}}">
                    {{ $categoryLink }}
                </a>
            </div>

            <x-slot:actions>
                @include('app.admin.content.categories.partials.create')
                <x-modal.open
                    :iterator="$category->id"
                    :name="ModalName::APP_CATEGORY"
                    :type="ModalType::UPDATE"
                    :icon="$editIcon"
                    :background="false"
                />
            </x-slot:actions>

            <div class="category-card-header">
                <p>{{$category->locale->description}}</p>


            </div>
            <x-slot:body>
                <ul class="category-card-tags" x-show="show" x-bind:class="show ? 'border-start' : ''">
                    @foreach($category->tags as $tag)
                        @if($tag->locale)
                            <div class="card-tag-content">
                                @php($tagLink = route(__('route.listing'), [
                                    'categories' => $category->locale->slug,
                                    'child' => $tag->locale->slug,
                                ]))

                                <li>
                                    <div class="position-relative">
                                        <span class="w-100">{{$tag->locale->title}}</span>

                                        <div class="card-tag-actions">
                                            <x-modal.open
                                                :iterator="$tag->id"
                                                :name="ModalName::APP_CATEGORY_TAG"
                                                :type="ModalType::UPDATE"
                                                :automatic="true"
                                                :background="false"
                                            />

                                            <x-modal.open
                                                :iterator="$tag->id"
                                                :name="ModalName::APP_CATEGORY_TAG"
                                                :type="ModalType::DELETE"
                                                :automatic="true"
                                                :background="false"
                                            />
                                        </div>
                                    </div>
                                </li>
                            </div>
                        @endif
                    @endforeach
                </ul>
            </x-slot:body>
        </x-card>
    @endforeach
</div>
