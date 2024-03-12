@include('app.admin.content.comments.partials.create')

@foreach($comments as $comment)
    <div class="d-flex justify-content-between align-items-center">
        {{$comment->name}}

        <div class="d-flex gap-2">
            @include('app.admin.content.comments.partials.edit', ['item' => $comment])
            @include('app.admin.content.comments.partials.delete', ['item' => $comment])
        </div>
    </div>

@endforeach
