@props([
    'type' => 'text',
    'name',
    'value' => null,
    'label' => null,
    'placeholder' => null,
    'required' => true,
    'disabled' => false,
    'autocomplete' => 'off',
    'max' => 200,
    'model' => null,
    'id' => null,
    'background' => true,
])
<div class="d-flex gap-2 w-100">
    @if(isset($image))
        <div class="app-input-image">{{$image}}</div>
    @endif

    <div class="app-input">
        <div class="input-group">
            <div @class([
                'input-group-text',
                'input-group-bg' => $background,
            ])>
                {{$slot}}
            </div>

            <div class="form-floating">
                @if($model)
                    <input type="{{ $type }}" class="form-control focus-ring focus-ring-accent"
                           x-model="{{$model}}"
                           id="{{$name}}"
                           placeholder="{{$name}}"
                           name="{{$name}}"
                           aria-label="{{$name}}"
                           aria-describedby="{{$placeholder}}"
                           max-length="{{$max}}"
                           value="{{$value}}"
                           autocomplete="{{$autocomplete}}"
                        {{$disabled ?? 'disabled'}}
                        {{$required ?? 'required'}}
                    />
                @else
                    <input type="{{ $type }}" class="form-control focus-ring focus-ring-accent"
                           id="{{$id ? $id : $name}}"
                           placeholder="{{$name}}"
                           name="{{$name}}"
                           aria-label="{{$name}}"
                           aria-describedby="{{$placeholder}}"
                           max-length="{{$max}}"
                           value="{{$value}}"
                        {{$disabled ?? 'disabled'}}
                        {{$required ?? 'required'}}
                    />
                @endif


                <label for="{{$id ? $id : $name}}">{{$label ? $label : ucfirst($name)}}</label>
            </div>
        </div>
    </div>
</div>
