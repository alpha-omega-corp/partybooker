@php($companyAdverts = $advert->company->adverts()->get())

@if(count($companyAdverts) !== 1)
    <div class="company-adverts">
        <x-card :title="__('listing.adverts')">
            @foreach($companyAdverts as $companyAdvert)
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
@endif


