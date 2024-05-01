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
