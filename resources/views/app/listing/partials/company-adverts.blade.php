<div class="company-adverts">
    <x-card :title="__('listing.adverts')">
        @foreach($advert->company->adverts()->get() as $companyAdvert)
            @if($companyAdvert->id != $advert->id)
                <a href="{{route('guest.listing.advert', [
                                        'advert' => $companyAdvert,
                                        'company' => $company
                                    ])}}">
                    <div class="company-adverts-item">
                        <h6>{{ $companyAdvert->locale->title}}</h6>
                        <div>
                            <x-advert.category :advert="$companyAdvert"/>
                        </div>
                    </div>
                </a>
            @endif
        @endforeach
    </x-card>
</div>

