@props([
    'title',
    'icon'
])

<div class="admin-listing-info">
    <div class="listing-info-header">
        @svg($icon)
        <h6 class="fw-bold">{{$title}}</h6>
    </div>
    <div class="listing-info-content">
        {{$slot}}
    </div>
</div>
