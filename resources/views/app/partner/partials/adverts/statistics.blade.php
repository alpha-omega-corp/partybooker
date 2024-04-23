<x-card :title="__('advert.statistics')" :can-open="false">
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
</x-card>


