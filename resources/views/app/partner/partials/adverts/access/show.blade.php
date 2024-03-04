@php($route = route('guest.listing.advert', [
        'company' => $advert->company,
        'advert' => $advert
]))

<div>
    <a href="{{$route}}">
        {{$route}}
    </a>
    
    <hr>

    <div class="statistics-advert">
        <x-statistics
            :title="__('statistic.views')"
            :value="$advert->statistics->views"
            :icon="$eyeIcon"
        />

        <x-statistics
            :title="__('statistic.views')"
            :value="$advert->statistics->requests"
            :icon="$boxIcon"
        />
    </div>


</div>




