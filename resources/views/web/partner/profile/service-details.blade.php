@php use App\Models\Advert; @endphp
@foreach ($adverts as $k => $advert)
    @php
        $title = '#' .  $k + 1 . ': ' . __('service.' . $advert->view_name)
    @endphp

@endforeach
