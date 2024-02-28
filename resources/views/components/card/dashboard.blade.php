@props(['title'])

<div class="container p-0 partner-dashboard shadow-lg">
    <div class="card-dashboard-header">
        <h1>{{$title}}</h1>
    </div>

    {{$slot}}
</div>
