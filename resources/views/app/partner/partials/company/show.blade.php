@include('app.partner.partials.company.edit')
@php($companyLink = route('guest.company.show', ['company' => $partner->company]))

<div class="partner-company">

    <div class="d-flex align-items-center gap-4">
        <img src="{{asset($partner->company->logo)}}" alt="{{$partner->company->name}}" class="company-logo">
        <div class="d-flex flex-column gap-2">
            <x-icon.text :text="$partner->company->contact->email" :icon="$emailIcon"/>
            <x-icon.text :text="$partner->company->contact->phone" :icon="$phoneIcon"/>
            <x-icon.text :text="$partner->company->contact->fax" :icon="$faxIcon"/>
        </div>
    </div>

    <hr>

    <div class="d-flex flex-column gap-2">
        <x-icon.text :text="$partner->company->name" :icon="$companyIcon"/>
        <a href="{{$companyLink}}">
            <x-icon.text :text="$companyLink" :icon="$linkIcon"/>
        </a>


    </div>

    <hr>

    @include('app.partner.partials.company.statistics')
</div>



