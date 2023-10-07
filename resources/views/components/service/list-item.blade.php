@props([
    'title',
])

<li class="list-group-item p-0 d-flex">
    <div class="title">
       {{$title}}
    </div>
    <div class="content">
        {{$slot}}
    </div>
</li>
