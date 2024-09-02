@foreach($adverts as $advert)
    <a href="{{route(__('route.advert'), [
    'company' => $advert->company,
    'category' => $advert->category->locale,
])}}">
        <div class="advert-card">
            <div class="advert-card-thumbnail">
                <img src="{{asset($advert->images()->thumbnail()->first()->path)}}" alt="alt">
            </div>

            <div class="advert-card-content">
                <div>
                    <h6 class="advert-card-title">
                        {{$advert->locale->title}}
                    </h6>
                    <div class="search-item-company">
                        {{$advert->company->name}}
                    </div>
                </div>
                <div>
                    <br>
                    <span class="badge text-bg-indigo text-white">
                        {{$advert->category->locale->title}}
                    </span>

                    @foreach($advert->tags as $tag)
                        @if($tag->tag->locale)
                            <span class="badge text-bg-primary text-white">
                                {{$tag->tag->locale->title}}
                            </span>
                        @endif
                    @endforeach

                    <hr>
                </div>

                <div class="item-content-address">
                    @php($location = $advert->company->location)
                    <p>{{$location->state}}, {{ $location->city }}, {{ $location->address }}</p>
                </div>
            </div>
        </div>
    </a>
@endforeach




