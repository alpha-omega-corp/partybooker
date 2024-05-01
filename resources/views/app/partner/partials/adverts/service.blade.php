@php($accordion = 'partnerAdvertService'.$advert->id)

<x-accordion.index :name="$accordion">
    <x-accordion.item
        name="tags"
        :accordion="$accordion"
        :padding="false"
    >

        <x-slot:title>
            {{__('advert.tags')}}
        </x-slot:title>

        <x-slot:content>
            @include('app.partner.partials.adverts.tags.create')
            @include('app.partner.partials.adverts.tags.show')
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        name="service"
        :accordion="$accordion"
        :padding="false"
    >

        <x-slot:title>
            {{__('advert.service')}}
        </x-slot:title>

        <x-slot:content>
            @include('app.partner.partials.adverts.content.edit')
            <div class="partner-advert-content">
                @include('app.partner.partials.adverts.content.show', ['advert' => $advert])
            </div>
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        name="gallery"
        :accordion="$accordion"
        :padding="false"
    >

        <x-slot:title>
            {{__('advert.gallery')}}
        </x-slot:title>

        <x-slot:content>
            @include('app.partner.partials.adverts.gallery.create')
            @include('app.partner.partials.adverts.gallery.show', ['advert' => $advert])
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        name="description"
        :accordion="$accordion"
        :padding="false"
    >
        <x-slot:title>
            {{__('advert.description')}}
        </x-slot:title>

        <x-slot:content>
            @include('app.partner.partials.adverts.description.edit')
            <div class="p-4">
                {!! $advert->locale->description !!}
            </div>
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        name="optimization"
        :accordion="$accordion"
        :padding="false"
    >
        <x-slot:title>
            {{__('advert.optimization')}}
        </x-slot:title>

        <x-slot:content>
            @include('app.partner.partials.adverts.meta.edit')
            @include('app.partner.partials.adverts.meta.show', ['advert' => $advert])
        </x-slot:content>
    </x-accordion.item>

    <x-accordion.item
        name="statistics"
        :accordion="$accordion"
        :padding="false"
    >
        <x-slot:title>
            {{__('advert.statistics')}}
        </x-slot:title>

        <x-slot:content>
            <div class="statistics-advert">
                <x-statistics
                    :title="__('statistic.views')"
                    :value="$advert->statistics->views"
                    :icon="$eyeIcon"
                />

                <x-statistics
                    :title="__('statistic.views')"
                    :value="$advert->statistics->requests"
                    :icon="$boxIcon"
                />
            </div>
        </x-slot:content>
    </x-accordion.item>


</x-accordion.index>

