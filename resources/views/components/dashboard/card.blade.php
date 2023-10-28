@props([
    'title',
])
<div class="dashboard-card shadow-lg">

    <div class="row">
        <div class="d-flex">
            <div>
                <h2 class="fw-bold text-uppercase m-0 p-0">
                    {{$title}}
                </h2>
            </div>


            <div class="d-flex align-items-end">
                <div class="dashboard-card-badge">
                    @if(isset($badge))
                        {{$badge}}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="dashboard-card-body">
        {{$slot}}
    </div>
</div>
