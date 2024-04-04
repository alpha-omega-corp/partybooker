<div class="service-form">
    <ul class="service-form-list">
        @foreach($items as $item)
            <li>
                {{$item->locale->label}}
            </li>
        @endforeach
    </ul>
</div>
