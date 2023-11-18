@props([
    'type' => 'text',
    'name',
    'label' => null,
    'id' => '',
    'icon',
    'required' => true,
    'max' => null
])
<div>
    @if($label)
        <label for="{{$id}}" class="form-label">{{$label}}</label>
    @endif

    <div class="input-group">

    <span class="input-group-text" id="{{$id}}">
        @svg($icon)
    </span>

        <textarea
            type="{{ $type }}"
            name="{{ $name }}"
            class="form-control"
            aria-label="{{ $label }}"
            aria-describedby="{{$id}}"
        {{$required ? 'required' : ''}}
            {{$max ? 'max-length="' . $max . '"' : ''}}>{{$slot}}
        </textarea>
    </div>

</div>
