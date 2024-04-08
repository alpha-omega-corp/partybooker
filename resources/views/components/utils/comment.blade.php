@props([
    'comment',
])

<div class="comment-card shadow-lg">
    <div class="comment-card-content">

        <div class="comment-card-icon">
            @svg('heroicon-o-chat-bubble-oval-left-ellipsis')
        </div>

        <p>{{$comment->locale->content}}</p>


        <div class="comment-card-name">
            <h6 class="fw-bold">
                {{$comment->name}}
            </h6>
        </div>
    </div>
</div>
