@props([
    'open' => false,
    'title',
    'name',
])

<div class="accordion" id="{{$name}}">
    <div class="accordion-item">
        <h2 class="accordion-header border-0">
            <button class="accordion-button text-uppercase fw-bold {{$open ? '' : 'collapsed'}}" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="{{'#collapse' . $name}}"
                    aria-expanded="{{$open ? 'true' : 'false'}}"
                    aria-controls="{{'collapse' . $name}}">

                <slot name="badges"></slot>
                <span>{{$title}}</span>

            </button>
        </h2>
        <div id="{{'collapse' . $name}}" class="accordion-collapse collapse {{$open ? 'show' : ''}}"
             data-bs-parent="{{'#'. $name}}">
            <div class="accordion-body h-100 w-100">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
