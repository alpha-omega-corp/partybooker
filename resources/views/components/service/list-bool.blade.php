@props([
    'value'
])

<div class="service-bool">

    @if($value == 'yes' || $value == 'oui' || $value == 1)
        <p>@svg('heroicon-o-check-circle')</p>
    @elseif(trim($value) == '-')
        <p>@svg('heroicon-o-no-symbol')</p>
    @else
        <p>@svg('heroicon-o-no-symbol')</p>
    @endif

</div>
