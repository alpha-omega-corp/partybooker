@props(['title'])

<div class="container shadow-lg app-card-panel">
    <div class="card-panel-header">
        
        <h1 class="card-panel-title">
            {{$title}}
        </h1>

        @if(isset($header))
            <div>{{$header}}</div>
        @endif
    </div>

    {{$slot}}
</div>
