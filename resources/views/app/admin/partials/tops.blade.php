<div>
    <div x-data="partnerTop" class="w-100">
        <form method="POST" action="{{route('admin.dashboard.tops')}}" class="d-flex flex-column">
            @csrf
            <label for="top" class="pb-2">Partners</label>
            <select x-ref="select" name="top[]" id="top" class="admin-listing-tops"></select>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mt-3">
                    @svg('heroicon-o-check')
                </button>
            </div>
        </form>
    </div>
</div>
