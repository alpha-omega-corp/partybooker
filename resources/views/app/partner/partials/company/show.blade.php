<x-card.index :title="__('dashboard.company')">
    @include('app.partner.partials.company.edit')

    <div class="partner-company">
        <div class="d-flex align-items-center justify-content-start gap-4">

            <img src="{{asset($partner->company->logo)}}" alt="{{$partner->company->name}}" class="company-logo">

            <div class="d-flex flex-column gap-2">
                <x-icon.text :text="$partner->company->name" :icon="$companyIcon"/>
                <x-icon.text :text="$partner->company->contact->email" :icon="$emailIcon"/>
                <x-icon.text :text="$partner->company->contact->phone" :icon="$phoneIcon"/>
            </div>
        </div>

        <hr>

        @php($companyLink = route('guest.company.show', ['company' => $partner->company]))
        <a href="{{$companyLink}}">
            {{$companyLink}}
        </a>

        <hr>
        
        @include('app.partner.partials.company.statistics')

    </div>
</x-card.index>



