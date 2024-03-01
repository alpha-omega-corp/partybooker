@if($advert->locale)
    <div>
        {{$advert->locale->title}}
        {{$advert->locale->description}}
    </div>
@endif

