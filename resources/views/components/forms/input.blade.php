@props([
    'type' => 'text',
    'name',
    'value' => null,
    'label' => null,
    'placeholder' => null,
    'icon' => null,
    'image' => null,
    'required' => true,
    'disabled' => false,
    'max' => 200,
])

<div class="forms-input">
    <div class="input-group">
        <div class="input-group-text">
            {{$slot}}
        </div>

        <div class="form-floating">
            <input type="{{ $type }}" class="form-control focus-ring focus-ring-accent"
                   id="{{$name}}"
                   placeholder="{{$name}}"
                   name="{{$name}}"
                   aria-label="{{$name}}"
                   aria-describedby="{{$placeholder}}"
                   max-length="{{$max}}"
                   value="{{$value}}"

                {{$disabled ?? 'disabled'}}
                {{$required ?? 'required'}}/>

            <label for="{{$name}}">{{$label}}</label>
        </div>
    </div>
</div>
