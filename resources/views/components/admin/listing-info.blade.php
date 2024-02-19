@props([
    'title',
    'icon'
])

<div class="admin-listing-info">
    <div class="d-flex gap-2 border-bottom pb-2">
        @svg($icon)
        <h6 class="fw-bold">{{$title}}</h6>
    </div>
    <div class="d-flex flex-column">
        {{$slot}}
    </div>
</div>
