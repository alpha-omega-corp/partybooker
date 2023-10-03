@props([
    'title' => null,
])

<section
    x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
    role="tabpanel">
    @if($title)
        <h2 class="text-xl font-bold">{{$title}}</h2>
    @endif 
    {{$slot}}
</section>
