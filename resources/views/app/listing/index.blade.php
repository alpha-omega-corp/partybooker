@extends('main')

@section('content')
    <x-card.panel :title="$active ? $active->locale->title : __('app.listing')">

        <div class="app-listing-container">

            <div class="row app-listing-search" x-data="list">
                <div class="col-xl-4 col-lg-12">
                    <div class="app-listing-filters">

                        <div class="sticky-listing-search listing-search-container">

                            <x-forms.input
                                name="search"
                                :label="ucfirst(__('listing.search'))"
                                model="input"
                            >
                                @svg($searchIcon)
                            </x-forms.input>


                            <x-forms.select
                                name="state"
                                :label="__('listing.states')"
                                model="location"
                            >
                                @svg($pinIcon)

                                <x-slot:options>
                                    @foreach($locations as $location)
                                        <option value="{{$location}}">
                                            {{strtoupper($location)}}
                                        </option>
                                    @endforeach
                                </x-slot:options>
                            </x-forms.select>


                            <x-forms.select
                                name="category"
                                model="category"
                                :color="AppColor::INDIGO"
                                :label="__('listing.categories')"
                            >
                                @svg($boxIcon)

                                <x-slot:options>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->locale->title}}
                                        </option>
                                    @endforeach
                                </x-slot:options>
                            </x-forms.select>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-12">

                    <!-- main.blade.php x-data="list" injected content -->

                    <div x-show="input || location || category">
                        <div class="listing-search-content"></div>
                        <hr>
                    </div>


                    <div class="app-listing-content-container">

                        <div class="app-listing-content"></div>

                        <div x-intersect="next()"></div>

                    </div>


                </div>
            </div>
        </div>
    </x-card.panel>
@endsection
