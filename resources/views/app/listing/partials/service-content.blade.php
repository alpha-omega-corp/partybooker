@switch($content->service->serviceable_type)

    @case(\App\Enums\CategoryType::CATERER->value)
        @include('app.listing.partials.service.caterer', ['content' => $content])
        @break

    @case(\App\Enums\CategoryType::EVENT->value)
        @include('app.listing.partials.service.event', ['content' => $content])
        @break

    @case(\App\Enums\CategoryType::EQUIPMENT->value)
        @include('app.listing.partials.service.equipment', ['content' => $content])
        @break

    @case(\App\Enums\CategoryType::ENTERTAINMENT->value)
        @include('app.listing.partials.service.entertainment', ['content' => $content])
        @break

    @case(\App\Enums\CategoryType::WINE->value)
        @include('app.listing.partials.service.wine', ['content' => $content])
        @break

@endswitch
