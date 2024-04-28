<x-modal.open
    :name="ModalName::APP_USP"
    :type="ModalType::CREATE"
    :custom-color="AppColor::PRIMARY"
    :icon="$createIcon"
    :fit="true"
    :radius="false"
    :background="true"
/>

<x-accordion name="adminUsp">
    @foreach($usp as $item)
        @if($item->locale)
            <div class="d-flex justify-content-between align-items-center">
                <x-accordion.item
                    accordion="adminUsp"
                    :name="$item->id"
                >
                    <x-slot:actions>
                        @include('app.admin.content.usp.partials.edit', ['item' => $item])
                        @include('app.admin.content.usp.partials.delete', ['item' => $item])
                    </x-slot:actions>

                    <x-slot:title>
                        {{$item->locale->title}}
                    </x-slot:title>

                    <x-slot:content>
                        {{$item->locale->description}}
                    </x-slot:content>


                </x-accordion.item>
            </div>
        @endif
    @endforeach
</x-accordion>

@include('app.admin.content.usp.partials.create')
