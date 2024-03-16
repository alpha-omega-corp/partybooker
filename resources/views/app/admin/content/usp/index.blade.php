@include('app.admin.content.usp.partials.create')

<x-accordion name="adminUsp">
    @foreach($usp as $item)
        @if($item->locale)
            <div class="d-flex justify-content-between align-items-center">
                <x-accordion.item
                    accordion="adminUsp"
                    :name="$item->id"
                >
                    <x-slot:title>
                        {{$item->locale->title}}
                    </x-slot:title>

                    <x-slot:content>
                        {{$item->locale->description}}
                    </x-slot:content>

                    @include('app.admin.content.usp.partials.edit', ['item' => $item])
                    @include('app.admin.content.usp.partials.delete', ['item' => $item])
                </x-accordion.item>
            </div>
        @endif
    @endforeach
</x-accordion>
