@props([
    'name',
    'image',
    'accordion',
    'show' => false,
])

<div class="card mb-4 shadow-lg">
    <div class="card-body" x-data="{ c: '{{$name}}' }"
         @click="open(c)">
        <div class="card-text">
            <div class="accordion-item">
                <div class="accordion-item-flex">
                    <button class="accordion-button text-uppercase"
                            type="button" data-bs-toggle="collapse"
                            id="{{$name}}"
                            data-bs-target="{{'#collapse' . $name}}"
                            aria-expanded="false"
                            aria-controls="collapseTwo">
                        <img src="{{ Vite::image($image) }}"
                             class="d-block" alt="...">

                    </button>

                    <div class="card-title-container">
                        <h3
                            class="accordion-header text-uppercase fw-bold text-pink"
                            id="{{'heading' . $name}}">
                            {{$title}}
                        </h3>
                    </div>

                </div>

                <div id="{{'collapse' . $name}}" class="accordion-collapse collapse {{$show ? 'show' : ''}}"
                     aria-labelledby="{{'heading' . $name}}"
                     data-bs-parent="{{'#'. $accordion}}">
                    <div class="accordion-body">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
