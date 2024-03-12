@props([
    'name',
    'label',
    'rows' => 20,
    'value' => null
])

@php($id = 'textarea'.$name.$label)


<div class="form-floating app-textarea">
    <textarea
        class="form-control"
        placeholder="{{$name}}"
        name="{{$name}}"
        id="{{$id}}"
        style="height: 200px;">{{$value}}</textarea>

    <label for="{{$id}}">
        {{$label}}
    </label>
</div>
