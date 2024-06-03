@php use App\Http\Middleware\LocaleMiddleware;use App\Models\Category; @endphp


<div class="app-listing-content">
    @include('app.listing.partials.pagination')

    <div class="app-listing-items">
        @foreach($adverts as $advert)
            <x-advert.link :advert="$advert">
                <div class="advert-card shadow-lg">
                    <x-advert.category :advert="$advert"/>

                    <div class="advert-card-image">
                        @php($thumbnail = $advert->images()->thumbnail()->first())
                        <img src="{{asset($thumbnail->path)}}"
                             alt="{{$thumbnail->locale->title}}">
                    </div>

                    <div class="advert-card-content">
                        <div class="card-content-header">
                            <div class="advert-card-company">
                                <span>{{$advert->company->name}}</span>
                            </div>

                            <span class="text-gray">{{$advert->locale->title}}</span>
                        </div>

                        <div class="advert-card-details">
                            @php($location = $advert->company->location->state . ', ' .$advert->company->location->city . ' ' . $advert->company->location->address)
                            <p class="advert-card-location">{{$location}}</p>
                        </div>
                    </div>
                </div>
            </x-advert.link>
        @endforeach
    </div>
</div>






