@props([
    'location',
    'partner'
])

<div id="editLocation" class="edit-location"></div>
<form method="POST" id="editLocation" action="{{
                                Auth::user()->type == 'admin'
                                    ? url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-company-location')
                                    : url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-company-location')
                                }}">
    @csrf
    @include('partial.map_company')


</form>
