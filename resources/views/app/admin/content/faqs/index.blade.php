@include('app.admin.content.faqs.partials.create')

<x-accordion name="adminFaqs">
    @foreach($faqs as $item)
        @if($item->locale)
            <div class="d-flex justify-content-between align-items-center">
                <x-accordion.item
                    accordion="adminFaqs"
                    :name="$item->id"
                >
                    <x-slot:title>
                        {{$item->locale->question}}
                    </x-slot:title>

                    <x-slot:content>
                        {{$item->locale->answer}}
                    </x-slot:content>

                    <div class="d-flex">
                        @include('app.admin.content.faqs.partials.edit', ['item' => $item])
                        @include('app.admin.content.faqs.partials.delete', ['item' => $item])
                    </div>
                </x-accordion.item>
            </div>
        @endif
    @endforeach
</x-accordion>

