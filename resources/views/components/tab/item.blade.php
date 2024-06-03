<div
    x-show="isSelected($id('tab', whichChild($el, $el.parentElement)))"
    :aria-labelledby="$id('tab', whichChild($el, $el.parentElement))"
    role="tabpanel">

    @if($information)
        <div class="tab-page-header">
            <x-card.information>
                {{$information}}
            </x-card.information>

            @if(isset($header))
                {{$header}}
            @endif
        </div>
    @endif


    <div class="tab-page-content {{$padding ? 'p-3' : ''}}">
        {{$slot}}
    </div>
</div>
