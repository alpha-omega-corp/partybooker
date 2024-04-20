@php($category = $advert->service->serviceable)

@switch($category->service->serviceable_type)

    @case(\App\Enums\CategoryType::CATERER->value)
        @include('app.listing.partials.service.caterer')
        @break

    @case(\App\Enums\CategoryType::EVENT->value)
        @include('app.listing.partials.service.event')
        @break

    @case(\App\Enums\CategoryType::EQUIPMENT->value)
        @include('app.listing.partials.service.equipment')
        @break

    @case(\App\Enums\CategoryType::ENTERTAINMENT->value)
        @include('app.listing.partials.service.entertainment')
        @break

    @case(\App\Enums\CategoryType::WINE->value)
        @include('app.listing.partials.service.wine')
        @break

@endswitch
