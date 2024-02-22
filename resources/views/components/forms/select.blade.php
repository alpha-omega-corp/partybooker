@props([
    'label',
    'name'
])

<select class="form-select" aria-label="{{$label}}" name="{{$name}}">
    <option selected>{{$label}}</option>
    {{$slot}}
</select>
