<div class="d-flex">
    <x-dashboard.accordion name="listing-filters-accordion" title="Filters">
        {{$filter}}
    </x-dashboard.accordion>

    <x-dashboard.accordion name="listing-sort-accordion" title="Sort">
        {{$sort}}
    </x-dashboard.accordion>
</div>

<hr>
<div class="p-3">
    <input
        x-model="search"
        type="text"
        placeholder="Search"/>


</div>
