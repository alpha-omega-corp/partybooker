@props([
    'title'
])
<div class="dashboard-card shadow-lg mb-5">

    <h2 class="fw-bold text-uppercase">
        {{$title}}
    </h2>

    <div class="dashboard-card-body">
        {{$slot}}
    </div>
</div>
