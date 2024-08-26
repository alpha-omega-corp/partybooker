@foreach($adverts as $advert)
    <a href="#">
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
                        <span class="badge text-bg-pink text-white">
                            {{$advert->category->locale->title}}
                        </span>
                </div>

                <div class="item-content-address">
                    <p>{{$advert->company->location->address}}</p>
                </div>

            </div>
        </div>
    </a>
@endforeach






