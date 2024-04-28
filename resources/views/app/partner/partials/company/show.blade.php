@php($companyLink = route('guest.company.show', ['company' => $partner->company]))


<x-card.index
    :title="__('advert.company')"
    :can-open="false"
    :actionable="true"
>

    @include('app.partner.partials.company.edit')

    <div class="partner-company">
        <a href="{{$companyLink}}">
            <x-icon.text :text="$companyLink" :icon="$linkIcon"/>
        </a>
        <x-accordion name="partnerCompanyDetails">

            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="contacts"
                :padding="false"
            >
                <x-slot:title>
                    <h6>{{__('company.contacts')}}</h6>
                </x-slot:title>

                <x-slot:content>
                    <x-icon.text :text="$partner->company->contact->email" :icon="$emailIcon"/>
                    <x-icon.text :text="$partner->company->contact->phone" :icon="$phoneIcon"/>
                    <x-icon.text :text="$partner->company->contact->fax" :icon="$faxIcon"/>
                </x-slot:content>
            </x-accordion.item>
            
            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="location"
                :padding="false"
            >
                <x-slot:title>
                    <h6>{{__('company.location')}}</h6>
                </x-slot:title>

                <x-slot:content>
                    @include('app.partials.map')
                </x-slot:content>
            </x-accordion.item>

            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="statistics"
                :padding="false"
            >
                <x-slot:title>
                    <h6>{{__('company.statistics')}}</h6>
                </x-slot:title>

                <x-slot:content>
                    @include('app.partner.partials.company.statistics')
                </x-slot:content>
            </x-accordion.item>

        </x-accordion>


    </div>

</x-card.index>





