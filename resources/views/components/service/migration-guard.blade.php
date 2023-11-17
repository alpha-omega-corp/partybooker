@props(['check'])

@if($check instanceof stdClass)
    {{$slot}}
@endif


