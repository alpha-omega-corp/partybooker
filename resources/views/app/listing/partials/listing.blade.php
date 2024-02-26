@php use App\Http\Middleware\LocaleMiddleware;use App\Models\Category; @endphp

<div class="row justify-content-center">
    <div class="col-lg-4 col-md-0 col-sm-0 d-none d-sm-none d-md-none d-lg-block">
        @include('app.listing.partials.category')
    </div>

    <div class="col-lg-8 col-xs-12">
        <section>
            <div class="app-listing-content">
                <x-modal.index
                    :name="ModalName::APP_LISTING_SEARCH"
                    :type="ModalType::READ"
                    :size="ModalSize::XL"
                    :icon="$searchIcon"
                    :tooltip="__('listing.search')"
                    :absolute="true"
                >
                    @include('app.listing.partials.search')

                </x-modal.index>


                @foreach($adverts as $advert)
                    <x-adverts.link :advert="$advert">
                        <div class="advert-card">
                            <x-adverts.category :advert="$advert"/>

                            <div class="advert-card-image">
                                <img src="{{$advert->images()->where('is_thumbnail', true)->first()->path}}"
                                     class="cover"
                                     alt="placeholder">
                            </div>

                            <div class="advert-card-content">
                                <div class="card-content-header">
                                    <h6>{{$advert->locale->title}}</h6>
                                    <div class="content-header-company">
                                        @svg('heroicon-o-home-modern', 'text-accent')
                                        {{$advert->company->name}}
                                    </div>
                                </div>
                                <div class="card-content">
                                    {{$advert->locale->description}}

                                    <div class="card-content-address">
                                        {{$advert->company->address->address}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-adverts.link>
                @endforeach
            </div>

            <div class="mt-4">
                {{$adverts->links()}}
            </div>
        </section>
    </div>
</div>


