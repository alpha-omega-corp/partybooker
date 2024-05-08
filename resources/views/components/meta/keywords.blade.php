@props([
    'data'
])

<div class="meta-keywords">
    @foreach($data as $index => $keyword)
        <div class="keyword-item">
            {{$keyword}}
        </div>
    @endforeach
</div>
