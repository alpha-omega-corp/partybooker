<div class="listing-content-pagination sticky-listing-pagination">
    @if($adverts->hasPages())
        <div class="listing-pagination">
            {{$adverts->links()}}
        </div>
    @endif
</div>
