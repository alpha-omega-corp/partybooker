@props([
    'label',
    'name',
    'value' => null,
])

@php
    $id = 'editor' . ucfirst($name)
@endphp

<label for="{{$id}}" class="p-4">
    {{$label}}
</label>

<textarea
    name="{{$name}}"
    id="{{$id}}"
    maxlength="350"
    rows="10">
{{$value}}
</textarea>


<script type="module">
    tinymce.init({
        selector: 'textarea#{{$id}}',
        plugins: window.tinyPlugins,
        toolbar: window.tinyOptions,
    });
</script>
