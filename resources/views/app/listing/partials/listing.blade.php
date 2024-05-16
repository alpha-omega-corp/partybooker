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
                            <h5 class="advert-card-title">{{$advert->locale->title}}</h5>
                            <div class="advert-card-company">
                                @svg($companyIcon, 'text-blue')
                                <h6>{{$advert->company->name}}</h6>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="advert-card-description">
                                @php($description = strip_tags(html_entity_decode($advert->locale->description)))
                                {{Str::words($description, 40)}}
                            </div>
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






