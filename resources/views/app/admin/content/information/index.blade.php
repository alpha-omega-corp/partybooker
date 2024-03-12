@include('app.admin.content.information.partials.create')

@foreach($information as $item)
    @if($item->locale)
        <div class="d-flex justify-content-between align-items-center">
            {{$item->locale->title}}

            <div class="d-flex gap-2">
                @include('app.admin.content.information.partials.edit', ['item' => $item])
                @include('app.admin.content.information.partials.delete', ['item' => $item])

            </div>
        </div>
    @endif

@endforeach
