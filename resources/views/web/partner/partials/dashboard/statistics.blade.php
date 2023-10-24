<div class="row mt-5 mb-5">
    <div class="d-flex flex-wrap justify-content-center">
        <x-dashboard.stat-card
            :title="__('partner.views')"
            :value="$user->partnerInfo->statistic->view"
            icon="heroicon-o-eye"
        />

        <x-dashboard.stat-card
            :title="__('become_partner.phone')"
            :value="$user->partnerInfo->statistic->view"
            icon="heroicon-o-phone"
        />

        <x-dashboard.stat-card
            :title="__('partner.email')"
            :value="$user->partnerInfo->statistic->email"
            icon="heroicon-o-envelope"
        />

        <x-dashboard.stat-card
            :title="__('become_partner.website')"
            :value="$user->partnerInfo->statistic->website"
            icon="heroicon-o-globe-alt"
        />


        <x-dashboard.stat-card
            :title="__('become_partner.address')"
            :value="$user->partnerInfo->statistic->address"
            icon="heroicon-o-map-pin"
        />


        <x-dashboard.stat-card
            :title="__('partner.direct_requests')"
            :value="$user->partnerInfo->statistic->direct"
            icon="heroicon-o-archive-box"
        />


        <?php $networks = ['Facebook', 'Twitter', 'Instagram', 'Linkedin', 'Vimeo', 'Youtube']; ?>
        @foreach ($networks as $network)
                <?php $lc = strtolower($network); ?>

            <x-dashboard.stat-card
                :title="$network"
                :value="$user->partnerInfo->statistic->$lc"
                :image="$lc . '.svg'"
            />
        @endforeach

    </div>


</div>
