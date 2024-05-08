@props([
    'comment',
])

<div class="comment-card shadow-lg">
    <div class="comment-card-header">
        @svg('heroicon-o-chat-bubble-oval-left-ellipsis')
        <p class="card-header-name">{{$comment->name}}</p>
    </div>

    <div class="comment-card-content">
        <p>{{$comment->locale->content}}</p>
    </div>
</div>
