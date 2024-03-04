@if($statistic)
    <div class="statistics-company">
        <x-statistics
            :title="__('become_partner.phone')"
            :value="$statistic->phone"
            :icon="$phoneIcon"
        />

        <x-statistics
            :title="__('partner.email')"
            :value="$statistic->email"
            :icon="$emailIcon"
        />

        <x-statistics
            :title="__('become_partner.website')"
            :value="$statistic->website"
            :icon="$linkIcon"
        />

        <x-statistics
            :title="__('become_partner.address')"
            :value="$statistic->address"
            :icon="$pinIcon"
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

