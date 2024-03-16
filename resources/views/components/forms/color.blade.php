@props([
'name',
'label',
'value' => '#000000',
'id'
])

<div x-data="" class="mb-2">
    <button type="button" @click="document.getElementById('color-{{$id}}').click()" class="btn btn-secondary">
        {{$label}}
    </button>
</div>

<label>
    <input
        id="color-{{$id}}"
        type="color"
        name="{{$name}}"
        value="{{$value}}"
        class="d-none"/>
</label>
