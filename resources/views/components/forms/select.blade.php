@props([
    'label',
    'name'
])

<div class="app-select">
    <div class="input-group mb-3">
        <label class="input-group-text" for="{{$name}}">
            {{$slot}}
        </label>
        <select class="form-select" aria-label="{{$label}}" name="{{$name}}" id="{{$name}}">
            <option selected>{{$label}}</option>
            {{$options}}
        </select>
    </div>
</div>


