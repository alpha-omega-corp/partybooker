@foreach($plans as $item)
    @if($item->locale)
        <div class="d-flex justify-content-between align-items-center">
            <x-plan.title :plan="$item"/>

            <div class="d-flex gap-2">
                @include('app.admin.content.plans.partials.preview', ['item' => $item])
                @include('app.admin.content.plans.partials.edit', ['item' => $item])
            </div>
        </div>
    @endif
@endforeach
