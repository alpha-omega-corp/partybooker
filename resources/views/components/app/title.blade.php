<div class="d-flex justify-content-center">
    @switch($size)
        @case(TitleSize::SMALL)
            <h4 {{$attributes->merge(['class' => 'app-title-small '.$style])}}>
                {{$value}}
            </h4>
            @break
        @case(TitleSize::MEDIUM)
            <h2 {{$attributes->merge(['class' => 'app-title-medium '.$style])}}>
                {{$value}}
            </h2>
            @break
        @case(TitleSize::LARGE)
            <h1 {{$attributes->merge(['class' => 'app-title-large '.$style])}}>
                {{$value}}
            </h1>
            @break
    @endswitch
</div>
