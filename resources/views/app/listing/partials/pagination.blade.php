<div class="listing-content-pagination">
    @if($adverts->hasPages())
        <div class="listing-pagination">
            {{$adverts->links()}}
        </div>
    @endif
</div>
