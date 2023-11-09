@props([
    'title',
])

<li class="list-group-item p-0">
    <div class="title pb-2">
        {{$title}}
    </div>
    <div class="content">
        {{$slot}}
    </div>
</li>
