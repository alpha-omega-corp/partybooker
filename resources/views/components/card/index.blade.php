@props([
    'title' => null,
    'badge' => null,
])

<div class="app-card">
    <h2 class="app-card-title">
        {{$title}}
    </h2>

    @if($badge)
        <div class="d-flex align-items-start justify-content-start">
            <div class="app-card-badge">
                {{$badge}}
            </div>
        </div>
    @endif

    <div class="app-card-content">
        {{$slot}}
    </div>

</div>


