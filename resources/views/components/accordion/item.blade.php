@props([
    'name',
    'accordion',
    'show' => false,
    'padding' => true,
    'center' => false,
])

@php($id = 'accordion-' . $accordion . $name)
@php($target = 'collapse' . $id)
<div {{$attributes->merge(['class' => 'card'])}}>
    <div x-data="accordion('{{$id}}')">

        <div class="card-text">
            <div class="accordion-item">

                <div class="accordion-item-flex">
                    <div class="d-flex justify-content-between w-100">
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
                            <div
                                @class([
                                    'accordion-title',
                                    'w-100',
                                    'text-center' => $center,
                                ])
                                id="{{'heading' . $name}}">
                                {{$title}}
                            </div>
                        </div>

                        @if(isset($actions))
                            <div class="accordion-item-actions">
                                {{$actions}}
                            </div>
                        @endif
                    </div>
                    <div class="d-flex align-items-center">
                        {{$slot}}
                    </div>
                </div>

                <div id="{{$target}}" class="accordion-collapse collapse {{$show ? 'show' : ''}}"
                     aria-labelledby="{{'heading' . $name}}"
                     data-bs-parent="{{'#'. $accordion}}">
                    <div @class([
                        'accordion-body',
                        'accordion-body-padding' => $padding,
                    ])>
                        {{$content}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
