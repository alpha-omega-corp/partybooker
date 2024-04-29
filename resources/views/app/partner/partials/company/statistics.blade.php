@if($statistic)
    <div class="statistics-company">
        <x-statistics
            :title="__('partner.advert-views')"
            :value="$statistic->clicks"
            :icon="$clickIcon"
        />
        <x-statistics
            :title="__('partner.phone-views')"
            :value="$statistic->phone"
            :icon="$phoneIcon"
        />
        <x-statistics
            :title="__('partner.email-views')"
            :value="$statistic->email"
            :icon="$emailIcon"
        />
        <x-statistics
            :title="__('partner.website-views')"
            :value="$statistic->website"
            :icon="$linkIcon"
        />

        @foreach (NetworkType::values() as $network)
            <x-statistics
                :title="$network"
                :value="$statistic[$network] ?? '0'"
                :image="$network"
            />
        @endforeach
    </div>
@endif

