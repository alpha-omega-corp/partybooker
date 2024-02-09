@props([
    'comment',
])

<div class="reference">
    <div class="reference-card shadow-lg">
        <div class="reference-card-body">
            <div class="d-flex justify-content-center pb-5 reference-bubble">
                @svg('heroicon-o-chat-bubble-oval-left-ellipsis')
            </div>

            <p>{{app()->getLocale() == 'fr' ? $comment->french : $comment->english}}</p>
        </div>

        <div class="reference-title">
            <div class="d-flex">
                <h6 class="fw-bold">
                    {{$comment->name}}
                </h6>
            </div>
        </div>
    </div>
</div>
