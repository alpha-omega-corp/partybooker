<div>
    <h1>Client</h1>
    <hr>

    <p>{{$notification->phone}}</p>
    <p>{{$notification->email}}</p>

    <hr>
    <p><b>{{__('form.advert')}}</b>:
        <a href="{{route(__('route.advert'), ['company' => $advert->company, 'category' => $advert->category->locale])}}">
            {{$advert->locale->title}}
        </a>
    </p>
    <p><b>{{__('form.date')}}</b>: {{$notification->requestable->date}}</p>

    <p><b>{{__('form.participants')}}</b>: {{$notification->requestable->guests}}</p>

    <p><b>{{__('form.message')}}</b>: {{$notification->message}}</p>

</div>
