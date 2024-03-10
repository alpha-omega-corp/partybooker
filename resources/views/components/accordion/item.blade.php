@props([
    'name',
    'accordion',
    'show' => false,
])

<div class="card">
    <div x-data="accordion('{{$name}}')" @click="toggle()">

        <div class="card-text">
            <div class="accordion-item">
                <div class="accordion-item-flex">
                    <button class="accordion-button text-uppercase"
                            type="button" data-bs-toggle="collapse"
                            id="accordion-{{$name}}"
                            data-bs-target="{{'#collapse' . $name}}"
                            aria-expanded="false"
                            aria-controls="collapseTwo">
                        <h6
                            class="accordion-title"
                            id="{{'heading' . $name}}">
                            {{$title}}
                        </h6>
                    </button>

                    <div class="card-title-container">

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
