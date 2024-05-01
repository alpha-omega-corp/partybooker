@php($accordion = 'partnerAdvertService'.$advert->id)

<x-accordion.index :name="$accordion">

    @include('app.partner.partials.adverts.partials.tags')
    @include('app.partner.partials.adverts.partials.category')
    @include('app.partner.partials.adverts.partials.gallery')
    @include('app.partner.partials.adverts.partials.description')
    @include('app.partner.partials.adverts.partials.optimization')
    @include('app.partner.partials.adverts.partials.statistics')

</x-accordion.index>

