@props([
    'label',
    'name',
    'value' => null,
])

@php
    $id = 'editor' . ucfirst($name)
@endphp
<div class="app-editor">
    <div class="app-editor-label">
        <label for="{{$id}}">
            {{$label}}
        </label>
    </div>

    <textarea
        name="{{$name}}"
        id="{{$id}}"
        maxlength="350"
        rows="10">
{{$value}}
</textarea>
</div>


<script type="module">
    tinymce.init({
        selector: 'textarea#{{$id}}',
        plugins: window.tinyPlugins,
        toolbar: window.tinyOptions,
    });
</script>
