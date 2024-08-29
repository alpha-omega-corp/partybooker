@props([
    'label',
    'name',
    'color' => 'blue',
    'model' => null,
])

<div class="app-select">
    <div class="input-group mb-2">
        <label class="input-group-text input-group-text-{{$color}} text-gray" for="{{$name}}">
            {{$slot}}
        </label>
        <select class="form-select" x-model="{{$model}}" aria-label="{{$label}}" name="{{$name}}" id="{{$name}}">
            <option selected value="">{{ucfirst($label)}}</option>
            {{$options}}
        </select>
    </div>
</div>


