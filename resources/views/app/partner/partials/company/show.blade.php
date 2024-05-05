@php($companyLink = route('guest.company.show', ['company' => $partner->company]))
@php($company = $partner->company)


<x-card.index
    :title="__('advert.company')"
    :can-open="false"
    :actionable="true"
    class="partner-dashboard-card"
>

    @include('app.partner.partials.company.edit')

    <div class="partner-company">
        <x-accordion name="partnerCompanyDetails">

            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="logo"
                :padding="false"
            >
                <x-slot:actions>
                    @include('app.partner.partials.company.edit-logo')
                </x-slot:actions>

                <x-slot:title>
                    <h6>Logo</h6>
                </x-slot:title>

                <x-slot:content>
                    <div class="partner-company-logo">
                        <img src="{{asset($company->logo)}}" alt="{{$company->name}}">
                    </div>

                </x-slot:content>
            </x-accordion.item>

            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="contacts"
                :padding="false"
            >
                <x-slot:actions>
                    @include('app.partner.partials.company.edit-contacts')
                </x-slot:actions>

                <x-slot:title>
                    <h6>{{__('partner.company.contacts')}}</h6>
                </x-slot:title>

                <x-slot:content>
                    <x-icon.text :text="$partner->company->contact->email" :icon="$emailIcon"/>
                    <x-icon.text :text="$partner->company->contact->phone" :icon="$phoneIcon"/>
                    <x-icon.text :text="$partner->company->contact->fax" :icon="$faxIcon"/>
                </x-slot:content>
            </x-accordion.item>


            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="description"
                :padding="false"
            >
                <x-slot:actions>
                    @include('app.partner.partials.company.edit-description')
                </x-slot:actions>

                <x-slot:title>
                    <h6>{{__('partner.company.description')}}</h6>
                </x-slot:title>

                <x-slot:content>
                    <div class="bg-white">
                        <x-icon.text :text="$partner->company->locale->slogan" :icon="$sloganIcon"/>
                    </div>

                    <div class="partner-company-description">
                        {!! $company->locale->description !!}
                    </div>
                </x-slot:content>
            </x-accordion.item>

            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="statistics"
                :padding="false"
            >
                <x-slot:title>
                    <h6>{{__('partner.company.statistics')}}</h6>
                </x-slot:title>

                <x-slot:content>
                    @include('app.partner.partials.company.statistics')
                </x-slot:content>
            </x-accordion.item>

            <x-accordion.item
                accordion="partnerCompanyDetails"
                name="location"
                :padding="false"
            >
                <x-slot:title>
                    <h6>{{__('partner.company.location')}}</h6>
                </x-slot:title>

                <x-slot:content>
                    @include('app.partials.map')
                </x-slot:content>
            </x-accordion.item>
        </x-accordion>

        <a href="{{$companyLink}}">
            <x-icon.text :text="$companyLink" :icon="$linkIcon"/>
        </a>

    </div>

</x-card.index>





