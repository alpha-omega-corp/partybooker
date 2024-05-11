@php($companyAdverts = $advert->company->adverts()->get())

@if($showAll || count($companyAdverts) !== 1)
    <x-card
        :title="$otherTitle"
        :can-open="false"
        :center="$center"
        :radius="$radius"
        class="company-adverts"
    >
        @foreach($companyAdverts as $companyAdvert)
            @if($showAll || $companyAdvert->id != $advert->id)
                <a href="{{route(__('route.advert'), [
                    'company' => $company,
                    'category' => $companyAdvert->category->locale,
                ])}}">
                    <div class="company-adverts-item">
                        <h6 class="adverts-item-title d-inline-block text-truncate">
                            {{ $companyAdvert->locale->title}}</h6>
                        <div>
                            <x-advert.category :advert="$companyAdvert"/>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </x-card>
@endif


