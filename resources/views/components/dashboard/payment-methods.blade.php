@if(count(Auth::user()->paymentMethods()) !== 0)
    @foreach(Auth::user()->paymentMethods() as $method)
        
    @endforeach
@else
    <a data-bs-toggle="modal" data-bs-target="#paymentModal" class="btn btn-primary">
        Add Payment Method
    </a>
@endif
