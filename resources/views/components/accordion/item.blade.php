@props([
    'name',
    'accordion',
    'show' => false,
])

@php($id = 'accordion-' . $accordion . $name)
@php($target = 'collapse' . $id)
<div class="card">
    <div x-data="accordion('{{$id}}')">

        <div class="card-text">
            <div class="accordion-item">

                <div class="accordion-item-flex">

                    <div
                        @class([
                            'accordion-button',
                            'collapsed' => !$show,
                        ])
                        @click="toggle()"
                        id="{{$id}}"
                        data-bs-toggle="collapse"
                        data-bs-target="{{'#' . $target}}"
                        aria-expanded="false"
                        aria-controls="{{$target}}">
                        <h6
                            class="accordion-title"
                            id="{{'heading' . $name}}">
                            {{$title}}
                        </h6>
                    </div>

                    <div>
                        {{$slot}}
                    </div>
                </div>

                <div id="{{$target}}" class="accordion-collapse collapse {{$show ? 'show' : ''}}"
                     aria-labelledby="{{'heading' . $name}}"
                     data-bs-parent="{{'#'. $accordion}}">
                    <div class="accordion-body">
                        {{$content}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
