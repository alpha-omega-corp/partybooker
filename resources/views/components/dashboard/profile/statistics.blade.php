@props([
    'statistics'
])

<div class="statistics">
    <div class="d-flex flex-wrap">
        <x-dashboard.stat-card
            :title="__('partner.views')"
            :value="$statistics->view"
            icon="heroicon-o-eye"
        />

        <x-dashboard.stat-card
            :title="__('become_partner.phone')"
            :value="$statistics->view"
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


        <x-dashboard.stat-card
            :title="__('partner.direct_requests')"
            :value="$statistics->direct"
            icon="heroicon-o-archive-box"
        />
        <?php $networks = ['Facebook', 'Twitter', 'Instagram', 'Linkedin', 'Vimeo', 'Youtube']; ?>
        @foreach ($networks as $network)
                <?php $lc = strtolower($network); ?>

            <x-dashboard.stat-card
                :title="$network"
                :value="$statistics->$lc"
                :image="$lc . '.svg'"
            />
        @endforeach
    </div>
</div>
