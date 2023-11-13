@props([
    'details'
])

<x-service.list-item :title="__('partner.menus')">
    @if (json_decode($details->menu))
        <x-service.ul>
            @foreach (json_decode($details->menu) as $key => $menu)
                <li>
                    <a href="{{ asset('storage/'.$menu)}}" target="blank">{{$key . '. Menu'}}</a>
                </li>
            @endforeach
        </x-service.ul>
    @endif
</x-service.list-item>

<x-service.list-item :title="__('partner.specialties')">
    {!! json_decode($details->specialities) !!}
</x-service.list-item>

