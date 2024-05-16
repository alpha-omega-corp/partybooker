@props([
    'id',
    'label' => null,
    'name',
    'value' => null,
])

@php
    $id = 'editor' . ucfirst($name)
@endphp

<div class="app-editor">

    <label for="{{$id}}" class="d-none">
        {{$label}}
    </label>


    <textarea
        name="{{$name}}"
        id="{{$id}}"
        maxlength="350"
        rows="10"
        class="editor">{{$value}}</textarea>
</div>


<script type="module">
    tinymce.init({
        selector: 'textarea#{{$id}}',
    });
</script>
