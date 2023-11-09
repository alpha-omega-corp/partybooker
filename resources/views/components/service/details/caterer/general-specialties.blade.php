@props([
    'details'])

<div class="position-relative">
    {{$slot}}
    <h6>MENU</h6>
    <x-service.list-item :title="__('partner.specialties')">
        <x-service.ul>

        </x-service.ul>
    </x-service.list-item>

    <x-service.list-item :title="__('partner.menus')">
        @if (isset($details) && $details->menu)
            @foreach (json_decode($details->menu) ?? [] as $menu)
                <p><a href="{{ asset('storage/menus/'.$menu)}}" target="blank">{{$menu}}</a></p>
            @endforeach
        @endif
    </x-service.list-item>
</div>
