<div class="benefits-content-card">
    <div class="benefits-content">
        @foreach($benefits as $benefit)
            <div class="benefit-card shadow-lg">
                <div class="benefit-card-header">
                    <img src="{{ $benefit->image }}" alt="{{ $benefit->name }}" class="shadow-lg">
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
        @endforeach
    </div>
</div>
