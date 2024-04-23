@props([
    'value' => null,
    'colorize' => false,
    'inline' => false,
    'items',
    'name',
    'id',
])

<div class="{{$inline ? 'w-100 d-flex justify-content-between p-2' : ''}}">
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
</div>
