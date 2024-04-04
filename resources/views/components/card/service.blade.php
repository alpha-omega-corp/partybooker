@props([
    'title',
    'padding' => false
])

<div class="service-card">

    <div class="service-card-header">
        <h5 class="service-card-title">
            {{$title}}
        </h5>
    </div>

    <div @class([
        'service-card-service',
        'p-3' => $padding
    ])>
        {{$slot}}
    </div>
</div>
