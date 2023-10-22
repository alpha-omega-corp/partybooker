@props([
    'open' => false,
    'title',
    'name',
])

<div class="accordion" id="{{$name}}">
    <div class="accordion-item">
        <h2 class="accordion-header border-0">
            <button class="accordion-button text-uppercase fw-bold" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                {{$title}}
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse {{$open ? 'show' : ''}}"
             data-bs-parent="{{'#'. $name}}">
            <div class="accordion-body h-100">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
