<x-modal.index
    :iterator="$category->id"
    :name="ModalName::APP_CATEGORY_TAG"
    :type="ModalType::CREATE"
    :size="ModalSize::MD"
    :icon="$createIcon"
    :background="false"
    :route="route('admin.categories.tag.store', [
        'category' => $category
    ])"
>
    @include('app.admin.content.categories.partials.form', [
        'item' => new \App\Models\CategoryTag()
    ])

</x-modal.index>
