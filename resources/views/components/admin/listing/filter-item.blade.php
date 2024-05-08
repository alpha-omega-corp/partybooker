@props([
    'name',
    'label'
])

<div class="form-check">
    <input class="form-check-input" type="radio" x-model="filter" value="{{$name}}"
           id="{{$name}}">
    <label class="form-check-label" for="{{$name}}">
        {{$label}}
    </label>
</div>
