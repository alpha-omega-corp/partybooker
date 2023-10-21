@props([
    'name',
    'label',
    'value',
    'checked' => false
])
<div class="form-check">
    <input
        name="{{$name}}"
        class="form-check-input"
        type="checkbox"
        id="{{$value}}"
        value="{{$value}}"
        {{$checked ? 'checked' : ''}}>
    <label class="form-check-label border-0 m-0 fw-normal" for="{{$value}}">
        <span class="d-flex">
            {{$slot}}
            {{$label}}

        </span>
    </label>
</div>
