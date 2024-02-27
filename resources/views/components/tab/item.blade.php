<section
    x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
    role="tabpanel">

    @if(isset($header))
        <div class="tab-page-header">
            @if($information)
                <x-card.information>
                    {{$information}}
                </x-card.information>
            @endif

            {{$header}}
        </div>
    @endif

    <div class="tab-page-content">
        {{$slot}}
    </div>
</section>
