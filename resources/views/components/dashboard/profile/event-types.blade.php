@props([
    'eventTypes',
    'partnerEt',
    'user',
])

<form method="POST" action="{{route(Auth::user()->type === 'admin' ? 'update-et-admin' : 'update-et')}}">
    @csrf

    <div class="d-flex flex-wrap justify-content-between">
        @foreach($eventTypes as $key => $eventType)
            <div class="event-type-item mt-3 {{in_array($eventType->id, $partnerEt) ? 'shadow-lg border-accent' : ''}}">
                <div class="form-check m-0">
                    <input
                            name="eventTypes[]"
                            class="form-check-input"
                            type="checkbox"
                            id="{{$key}}"
                            value="{{$eventType->id}}"
                            {{in_array($eventType->id, $partnerEt) ? 'checked' : ''}}
                    >
                    <label class="form-check-label border-0" for="{{$key}}">
                     <span class="d-flex">
                         @if(app()->getLocale() === 'en')
                             {{$eventType->en_name}}
                         @else
                             {{$eventType->fr_name}}
                         @endif
                     </span>
                    </label>
                </div>
            </div>
        @endforeach
    </div>

    <input type="hidden" name="partnerId" value="{{$user->id_partner}}"/>


    <hr>
    <button type="submit" class="btn btn-accent mt-3 w-100">
        {{__('partner.save')}}
    </button>
</form>
