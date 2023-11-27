@props([
    'plan',
    'sortName',
    'sortLabel'
])

<div class="form-check">
    <input class="form-check-input" type="radio" x-model="sort" value="{{$sortName}}"
           id="{{$sortName . '-' . strtolower($plan)}}">
    <label class="form-check-label" for="{{$sortName . '-' . strtolower($plan)}}">
        {{$sortLabel}}
    </label>
</div>
