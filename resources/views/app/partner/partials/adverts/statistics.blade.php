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
