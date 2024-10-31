@extends('main')

@section('content')
    <x-card.panel :title="$active ? $active->locale->title : __('app.listing')">

        <div class="app-listing-container">

            <div class="row app-listing-search" x-data="list">

                <div class="col-xl-4 col-lg-12 listing-filters-col">
                    @include('app.listing.partials.listing-filters')
                </div>

                <div class="col-xl-8 col-lg-12">
                    <!-- main.blade.php x-data="list" injected content -->

                    <div x-show="input || location || category">
                        <div class="listing-search-content"></div>
                    </div>


                    <div class="app-listing-content-container" x-show="!location && !category">

                        <div class="app-listing-content"></div>

                        <div x-intersect="next()"></div>

                    </div>


                </div>
            </div>
        </div>
    </x-card.panel>
@endsection
