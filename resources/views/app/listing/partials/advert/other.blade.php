@php($companyAdverts = $advert->company->adverts()->get())

@if(count($companyAdverts) !== 1)
    <x-card
        :title="__('advert.others')"
        :can-open="false"
        :center="true"
        class="company-adverts"
    >
        @foreach($companyAdverts as $companyAdvert)
            @if($showAll || $companyAdvert->id != $advert->id)
                <a href="{{route(__('route.advert'), [
                    'advert' => $companyAdvert,
                    'company' => $company
                ])}}">
                    <div class="company-adverts-item">
                        <h6 class="adverts-item-title">{{ $companyAdvert->locale->title}}</h6>
                        <div>
                            <x-advert.category :advert="$companyAdvert"/>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </x-card>
@endif


