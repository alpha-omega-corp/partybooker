@php use App\Http\Middleware\LocaleMiddleware;use App\Models\Category; @endphp
<section class="listing-content-section">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-0 col-sm-0 d-none d-sm-none d-md-none d-lg-block">
            <h6 class="text-uppercase text-center fw-bold fs-2 filter-title">
                {{ __('main.category') }}
            </h6>

            <ul class="list-group category-filters">
                @foreach ($categories as $item)
                    <li class="list-group-item list-group-item-parent">
                        <a href="{{url(route('guest.listing.index', ['category' => $item->locale->first()->slug]))}}">
                            {{ $item->locale->first()->title }}
                        </a>
                    </li>

                    @foreach ($item->children()->get() as $child)
                        @if($child->locale->first())
                            <li class="list-group-item list-group-item-child ">
                                <a class="link-underline link-underline-primary text-truncate"
                                   href="{{url(route('guest.listing.index', [
                                        'child' => $child->locale->first()->slug,
                                        'category' => $item->locale->first()->slug
                                    ]))}}">
                                    {{$child->locale->first()->title}}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endforeach
            </ul>
        </div>

        <div class="col-lg-8 col-xs-12">
            <section class="partner-listing">
                @foreach($adverts as $advert)
                    <x-adverts.link :advert="$advert">
                        <div class="card m-2">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div>
                                        <img src="{{$advert->images()->where('is_thumbnail', true)->first()->path}}"
                                             class="cover rounded"
                                             alt="placeholder">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase fw-bold listing-card-title">
                                            {{$advert->locale->title}}
                                        </h5>
                                        <div class="card-text description">
                                            <x-adverts.category :advert="$advert"/>

                                            <br>
                                            {{$advert->locale->description}}


                                        </div>

                                        <div class="d-flex location-box mb-3">
                                            {{$advert->company->address->address}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(Request::has('event_types'))
                            <div class="listing-tags">
                                @php
                                    $eventTypes = array_values($partner->eventTypes()->get()->map(function ($eventType) {
                                        return app()->getLocale() === 'en'
                                            ? $eventType->en_name
                                            : $eventType->fr_name;
                                    })->toArray())
                                @endphp
                                @foreach($eventTypes as $et)
                                    <span class="badge text-bg-accent me-3">
                                        {{$et}}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </x-adverts.link>
                @endforeach

                <div class="mt-4">
                    {{$adverts->links()}}
                </div>
            </section>
        </div>
    </div>
</section>


