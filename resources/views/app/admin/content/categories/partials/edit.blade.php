@foreach($categories as $category)
    <x-modal.index
        :iterator="$category->id"
        :name="ModalName::APP_CATEGORY"
        :type="ModalType::UPDATE"
        :size="ModalSize::MD"
        :hidden="true"
        :route="route('admin.categories.update', [
            'category' => $category
        ])"
    >
        @include('app.admin.content.categories.partials.form', [
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
                :route="route('admin.categories.tag.update', [
                'tag' => $tag
            ])"
            >
                @include('app.admin.content.categories.partials.form', [
                    'item' => $tag
                ])
            </x-modal.index>

            @include('app.admin.content.categories.partials.delete', [
                'tag' => $tag
            ])
        @endif
    @endforeach

@endforeach
