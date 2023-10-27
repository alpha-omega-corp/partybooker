@if(count(Auth::user()->paymentMethods()) !== 0)
    @foreach(Auth::user()->paymentMethods() as $method)

    @endforeach
@else

@endif
