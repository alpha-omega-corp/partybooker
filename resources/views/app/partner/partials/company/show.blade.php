@php($companyLink = route('guest.company.show', ['company' => $partner->company]))


<x-card.index
    :title="__('advert.company')"
    :can-open="false"
>
    @include('app.partner.partials.company.edit')

    <div class="partner-company">
        <div class="d-flex flex-column">
            <x-icon.text :text="$partner->company->contact->email" :icon="$emailIcon"/>
            <x-icon.text :text="$partner->company->contact->phone" :icon="$phoneIcon"/>
            <x-icon.text :text="$partner->company->contact->fax" :icon="$faxIcon"/>
            <a href="{{$companyLink}}">
                <x-icon.text :text="$companyLink" :icon="$linkIcon"/>
            </a>

        </div>

        @include('app.partner.partials.company.statistics')
    </div>

</x-card.index>





