@props([
   'items',
   'title',
   'name'
])
<div class="forms-checkbox">
    <h6>{{$title}}</h6>

    <div class="d-flex justify-content-around">
        @foreach($items as $key => $item)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="{{$name}}[]" value="{{$item}}"
                       id="{{'checkbox'.$name.$key}}">
                <label class="form-check-label" for="{{'checkbox'.$name.$key}}">
                    {{strtoupper($item)}}
                </label>
            </div>
        @endforeach
    </div>
</div>


