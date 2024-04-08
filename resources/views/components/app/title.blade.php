<div class="text-center">
    @switch($size)
        @case(TitleSize::SMALL)
            <h4 {{$attributes->merge(['class' => 'app-title app-title-small '. ($background ? 'text-white bg-' : 'text-').$color->value])}}>
                {{$value}}
            </h4>
            @break
        @case(TitleSize::MEDIUM)
            <h2 {{$attributes->merge(['class' => 'app-title app-title-medium text-'.$color->value])}}>
                {{$value}}
            </h2>
            @break
        @default
            <h1 {{$attributes->merge(['class' => 'app-title app-title-large text-'.$color->value])}}>
                {{$value}}
            </h1>
            @break
    @endswitch
</div>
