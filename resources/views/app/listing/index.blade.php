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
                                model="searchInput"
                                label="Search"
                                type="text">
                                @svg($searchIcon)
                            </x-forms.input>

                            <x-forms.select name="state" :label="__('listing.state')" model="locationInput">
                                @svg($pinIcon)

                                <x-slot:options>
                                    @foreach($locations as $location)
                                        <option value="{{$location}}">
                                            {{strtoupper($location)}}
                                        </option>
                                    @endforeach
                                </x-slot:options>
                            </x-forms.select>

                            <x-forms.select color="pink" name="category" :label="__('listing.categories')">
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
                    <div class="app-listing-content">
                        @include('app.listing.partials.listing-ajax')
                    </div>
                    <div x-intersect="next()"></div>

                </div>
            </div>
        </div>
    </x-card.panel>
@endsection
