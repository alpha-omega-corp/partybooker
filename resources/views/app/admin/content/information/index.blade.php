<x-modal.open
    :name="ModalName::APP_INFORMATION"
    :type="ModalType::CREATE"
    :custom-color="AppColor::PRIMARY"
    :icon="$createIcon"
    :fit="true"
    :radius="false"
    :background="true"
/>

@foreach($information as $item)
    @if($item->locale)
        <div class="admin-content-item">
            {{$item->locale->title}}

            <div class="d-flex gap-2">
                @include('app.admin.content.information.partials.edit', ['item' => $item])
                @include('app.admin.content.information.partials.delete', ['item' => $item])
            </div>
        </div>
    @endif
@endforeach

@include('app.admin.content.information.partials.create')
