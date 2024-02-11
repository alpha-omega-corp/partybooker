@props([
    'name',
])

<div class="app-accordion">
    <div class="accordion" id="{{$name}}">
        <div class="card-group">
            <div class="card-container">
                {{$slot}}
            </div>
        </div>
    </div>
</div>

