@props([
    'name',
    'model',
    'value'
])

<div class="form-check">
    <input class="form-check-input" type="radio" x-model="{{$model}}" value="{{$value}}"
           id="{{$name.'-'.$value}}">
    <label class="form-check-label" for="{{$name.'-'.$value}}">
        {{ucfirst(strtolower($value))}}
    </label>
</div>
