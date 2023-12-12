@props([
    'title',
    'text',
])

<div class="reference">
    <div class="d-flex justify-content-center">
        <div class="reference-card">
            <div class="d-flex justify-content-center reference-bubble">
                @svg('heroicon-o-chat-bubble-oval-left-ellipsis')
            </div>

            <p>{{$text}}</p>

            <div class="reference-title">
                <div class="d-flex">

                    @svg('heroicon-o-user-circle')

                    <h6 class="fw-bold">
                        {{$title}}
                    </h6>
                </div>
            </div>
        </div>
    </div>

</div>
