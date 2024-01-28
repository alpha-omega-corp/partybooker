@props([
    'title',
])

<div class="app-card">
    <h3 class="app-card-title display-6">
        {{$title}}
    </h3>

    <div class="app-card-content">
        {{$slot}}
    </div>

</div>
