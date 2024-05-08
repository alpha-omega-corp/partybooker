<x-accordion name="adminTopServices">
    <x-accordion.item
        accordion="adminTopServices"
        name="tops"
        :padding="false"
    >
        <x-slot:title>
            Top Partners
        </x-slot:title>

        <x-slot:content>
            <div x-data="top" class="w-100">
                <form method="POST" action="{{route('admin.tops')}}" class="d-flex flex-column">
                    @csrf
                    @method('PUT')
                    <label for="top"></label>
                    <select x-ref="select" name="top[]" id="top" class="admin-listing-tops"></select>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-blue rounded-0 w-100">
                            @svg('heroicon-o-check')
                        </button>
                    </div>
                </form>
            </div>
        </x-slot:content>
    </x-accordion.item>
</x-accordion>



