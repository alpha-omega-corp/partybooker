@props([
    'name',
    'model',
    'filters',
    'useName' => false,
    'isColumn' => true
])

<div class="filter-group">
    <div class="d-flex {{$isColumn ? 'flex-column' : ''}} gap-2">
        @foreach($filters as $filter)
            <x-admin.listing-filter :name="$name" :model="$model->value" :value="strtolower($filter)"/>
        @endforeach
    </div>
</div>
