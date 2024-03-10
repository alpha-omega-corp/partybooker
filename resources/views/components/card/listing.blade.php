@props(['title'])

<div class="container p-0 app-card-dashboard app-card-listing shadow-lg">

    <div class="card-listing-header">
        <h1>{{$title}}</h1>
        @if(isset($header))
            <div>{{$header}}</div>
        @endif
    </div>

    <div class="row">
        <div class="card-listing-sidebar col-lg-3 col-md-0 col-sm-0 d-none d-sm-none d-md-none d-lg-block">
            {{$categories}}
        </div>

        <div class="col-lg-9">
            {{$slot}}
        </div>
    </div>
</div>
