<section
    x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
    role="tabpanel">

    <div class="tab-page-header">
        @if($information)
            <x-card.information>
                {{$information}}
            </x-card.information>
        @endif
        @if(isset($header))
            {{$header}}
        @endif

    </div>

    <div class="tab-page-content {{$padding ? 'p-4' : 'mt-4'}}">
        {{$slot}}
    </div>
</section>
