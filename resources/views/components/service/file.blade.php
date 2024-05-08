@props([
    'text',
    'content',
])

<div class="service-file">
    @foreach($content->service->files as $file)
        <x-modal.index
            :iterator="$content->id.$file->id"
            :name="ModalName::PARTNER_SERVICE_IMAGE"
            :type="ModalType::READ"
            :size="ModalSize::XL"
            :action="false"
            :title="$text"
            :text="$text"
        >
            <div>
                <img src="{{asset($file->path)}}" alt="advert-file" class="advert-image">
            </div>
        </x-modal.index>
    @endforeach

</div>

