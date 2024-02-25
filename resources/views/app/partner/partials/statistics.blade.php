<x-card :title="__('dashboard.views')">
    @if($statistics)
        <div class="statistics">
            <div class="d-flex flex-wrap justify-content-center">
                <x-dashboard.stat-card
                    :title="__('become_partner.phone')"
                    :value="$statistics->phone"
                    icon="heroicon-o-phone"
                />

                <x-dashboard.stat-card
                    :title="__('partner.email')"
                    :value="$statistics->email"
                    icon="heroicon-o-envelope"
                />

                <x-dashboard.stat-card
                    :title="__('become_partner.website')"
                    :value="$statistics->website"
                    icon="heroicon-o-globe-alt"
                />

                <x-dashboard.stat-card
                    :title="__('become_partner.address')"
                    :value="$statistics->address"
                    icon="heroicon-o-map-pin"
                />

                @foreach (NetworkType::values() as $network)
                    <x-dashboard.stat-card
                        :title="$network"
                        :value="$statistics[$network] ?? '0'"
                        :image="$network"
                    />
                @endforeach
            </div>
        </div>
    @endif
</x-card>

