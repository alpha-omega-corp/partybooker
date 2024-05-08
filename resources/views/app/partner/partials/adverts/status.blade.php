<form method="POST" action="{{route('partner.advert.status', [
    'advert' => $advert,
])}}">
    @method('PUT')
    @csrf

    @if($advert->is_public)
        <button type="submit" class="btn text-danger tippy" data-tippy-content="private">
            @svg('heroicon-o-arrow-down')
        </button>
    @else
        <button type="submit" class="btn text-primary tippy" data-tippy-content="public">
            @svg('heroicon-o-arrow-up')
        </button>
    @endif


</form>
