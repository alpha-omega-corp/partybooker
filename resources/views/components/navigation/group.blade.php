<ul class="nav nav-flush flex-column text-center">

    @if(isset($header))
        {{$header}}
    @endif
    
    {{$slot}}
</ul>
