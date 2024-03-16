@php use App\Http\Middleware\LocaleMiddleware;use App\Models\Category; @endphp

<section class="app-listing-content">
    @foreach($adverts as $advert)
        <x-advert.link :advert="$advert">
            <div class="advert-card">
                <x-advert.category :advert="$advert"/>

                <div class="advert-card-image">
                    <img src="{{$advert->images()->thumbnail()->first()->path}}"
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
                        <p class="advert-card-description">
                            {{$advert->locale->description}}
                            <span>...</span>
                        </p>

                        <div class="card-content-address">
                            {{$advert->company->address->address}}
                        </div>
                    </div>
                </div>
            </div>
        </x-advert.link>
    @endforeach
</section>




