<div class="listing-content-pagination">
    @if($adverts->hasPages())
        <div class="listing-pagination">
            {{$adverts->links()}}
        </div>
    @else
        <div class="content-pagination-none">
            <span>{{count($adverts).' / '.count($adverts) }}</span>
        </div>
    @endif
</div>
