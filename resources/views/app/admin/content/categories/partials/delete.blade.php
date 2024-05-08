<x-modal.index
    :iterator="$tag->id"
    :name="ModalName::APP_CATEGORY_TAG"
    :type="ModalType::DELETE"
    :size="ModalSize::MD"
    :hidden="true"
    :route="route('admin.categories.tag.destroy', [
        'tag' => $tag
    ])"
>
    <x-slot:body>
        <p>Delete <b>{{$tag->locale->title}} ?</b></p>
    </x-slot:body>
</x-modal.index>
