@props([
    'title',
    'data',
    'keys' => []
])

@if($data)
    <ul class="service-item service-list">
        <h6>
            {{$title}}
        </h6>

        <div class="service-list-content">
            @foreach($data as $item)
                <li>
                    @if(!is_array($item))
                        {{$item}}
                    @else
                        @foreach($keys as $key)
                            {{$item[$key]}}
                        @endforeach
                    @endif
                </li>
            @endforeach
        </div>
    </ul>
@endif
