@props([
    'title',
])

<li class="list-group-item p-0">
    <div class="title">
        {{$title}}
    </div>
    <div class="content">
        {{$slot}}
    </div>
</li>
