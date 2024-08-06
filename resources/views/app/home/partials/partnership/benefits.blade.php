<div class="benefits-content">
    @foreach($benefits as $benefit)
        @if($benefit->locale)

            <div class="benefit-card shadow-lg">
                <div class="benefit-card-header">
                    <img src="{{ asset($benefit->image) }}" alt="{{ $benefit->name }}" class="shadow-lg">
                    <h6 class="benefit-card-title">
                        {{$benefit->locale->title}}
                    </h6>
                </div>

                <div class="benefit-card-content">
                    @foreach($benefit->items as $item)
                        <p>{{ $item->locale->content }}</p>
                    @endforeach
                </div>
            </div>
        @endif

    @endforeach
</div>
