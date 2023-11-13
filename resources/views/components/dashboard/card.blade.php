@props([
    'title',
])
<div class="dashboard-card">

    <div class="row">
        <div class="d-flex">
            <div>
                <h2 class="fw-bold text-uppercase text-standard">
                    {{$title}}
                </h2>
            </div>

            <div class="d-flex align-items-start justify-content-start">
                <div class="dashboard-card-badge">
                    @if(isset($badge))
                        {{$badge}}
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="dashboard-card-body">
        {{$slot}}
    </div>
</div>
