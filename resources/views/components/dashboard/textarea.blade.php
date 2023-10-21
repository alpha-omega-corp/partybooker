@props([
    'type' => 'text',
    'name',
    'label',
    'id' => '',
    'icon',
    'required' => true,
    'max' => null
])

<label for="{{$id}}" class="form-label">{{$label}}</label>

<div class="input-group">

    <span class="input-group-text" id="{{$id}}">
        @svg($icon)
    </span>

    <textarea
        type="{{ $type }}"
        name="{{ $name }}"
        class="form-control"
        placeholder="{{ $label }}"
        aria-label="{{ $label }}"
        aria-describedby="{{$id}}"
        {{$required ? 'required' : ''}}
        {{$max ? 'max-length="' . $max . '"' : ''}}>
            {{$slot}}
    </textarea>
</div>
