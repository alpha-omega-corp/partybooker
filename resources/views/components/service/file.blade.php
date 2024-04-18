@props([
    'title',
    'content',
])

@foreach($content->service->files as $file)
    <x-modal.index
        :iterator="$content->id.$file->id"
        :name="ModalName::PARTNER_SERVICE_IMAGE"
        :type="ModalType::READ"
        :size="ModalSize::XL"
    >
        <img src="{{asset($file->path)}}" alt="advert-file" class="advert-image">
    </x-modal.index>
@endforeach
