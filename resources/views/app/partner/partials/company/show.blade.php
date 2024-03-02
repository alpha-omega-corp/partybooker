<x-card.index :title="__('dashboard.company')">
    @include('app.partner.partials.company.edit')

    <div class="partner-company">
        <img src="{{asset($partner->company->logo)}}" alt="{{$partner->company->name}}" class="company-logo">
    </div>
</x-card.index>



