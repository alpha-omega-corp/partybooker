@props([
    'plan',
    'filterName',
    'filterLabel'
])

<div class="form-check">
    <input class="form-check-input" type="radio" x-model="filter" value="{{$filterName}}"
           id="{{$filterName . '-' . strtolower($plan)}}">
    <label class="form-check-label" for="{{$filterName . '-' . strtolower($plan)}}">
        {{$filterLabel}}
    </label>
</div>
