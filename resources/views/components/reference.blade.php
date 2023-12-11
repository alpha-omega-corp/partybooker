@props([
    'title',
    'text',
])

<div class="reference">
    <div class="d-flex justify-content-center">
        <div class="reference-card">
            <div class="reference-title">
                <div class="d-flex">

                    @svg('heroicon-o-user-circle')

                    <h6 class="fw-bold">
                        {{$title}}
                    </h6>
                </div>
            </div>


            <p>{{$text}}</p>
        </div>
    </div>

</div>
