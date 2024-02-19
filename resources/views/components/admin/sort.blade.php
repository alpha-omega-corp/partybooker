@props([
    'name',
    'sorts',
])

<div class="filter-group">
    <div class="d-flex flex-column gap-2">
        @foreach($sorts as $sort)
            <div class="form-check">
                <input class="form-check-input" type="radio" x-model="sort" value="{{$sort}}"
                       id="{{$name.'-'.$sort}}">
                <label class="form-check-label" for="{{$name.'-'.$sort}}">
                    {{ucfirst($sort)}}
                </label>
            </div>
        @endforeach
    </div>
</div>
