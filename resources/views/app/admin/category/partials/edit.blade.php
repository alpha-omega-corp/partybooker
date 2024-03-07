@foreach($categories as $category)
    <x-modal.index
        :iterator="$category->id"
        :name="ModalName::APP_CATEGORY"
        :type="ModalType::UPDATE"
        :size="ModalSize::MD"
        :hidden="true"
        :route="route('admin.category.update', [
            'category' => $category
        ])"
    >
        @include('app.admin.category.partials.form', [
            'item' => $category
        ])
    </x-modal.index>

    @foreach($category->tags as $tag)
        @if($tag->locale)
            <x-modal.index
                :iterator="$tag->id"
                :name="ModalName::APP_CATEGORY_TAG"
                :type="ModalType::UPDATE"
                :size="ModalSize::MD"
                :hidden="true"
                :route="route('admin.category.tag.update', [
                'tag' => $tag
            ])"
            >
                @include('app.admin.category.partials.form', [
                    'item' => $tag
                ])
            </x-modal.index>
        @endif
    @endforeach

@endforeach
