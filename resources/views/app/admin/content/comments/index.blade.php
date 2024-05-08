<x-modal.open
    :name="ModalName::APP_COMMENT"
    :type="ModalType::CREATE"
    :custom-color="AppColor::PRIMARY"
    :icon="$createIcon"
    :fit="true"
    :radius="false"
    :background="true"
/>

@foreach($comments as $comment)
    <div class="admin-content-item">
        {{$comment->name}}

        <div class="d-flex gap-2">
            @include('app.admin.content.comments.partials.edit', ['item' => $comment])
            @include('app.admin.content.comments.partials.delete', ['item' => $comment])
        </div>
    </div>

@endforeach

@include('app.admin.content.comments.partials.create')
