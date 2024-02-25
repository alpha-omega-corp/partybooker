@props([
    'value' => null,
    'colorize' => false,
    'items',
    'name',
    'id',
])

@foreach($items as $index => $item)
    <div class="form-check">
        <input
            class="form-check-input"
            type="radio"
            name="{{$name}}"
            value="{{$item}}"
            id="{{$id . $index}}"
            {{$value === $item ? 'checked' : ''}}
        >

        <label
            class="form-check-label text-uppercase fw-bold {{ $colorize ? 'text-' . $item : '' }}"
            for="{{$id . $index}}"
        >
            {{strtoupper($item)}}
        </label>
    </div>
@endforeach
