<div class="statistics">
    <ul>
        <li><span>{{ __('partner.views') }}: </span>{{ $user->partnerInfo->statistic->view ?? 0 }}</li>
        <li><span>{{ __('partner.phone_clicks') }}: </span>{{ $user->partnerInfo->statistic->phone ?? 0 }}</li>
        <li><span>{{ __('partner.email_clicks') }}: </span>{{ $user->partnerInfo->statistic->email ?? 0 }}</li>
        <li><span>{{ __('partner.website_clicks') }}: </span>{{ $user->partnerInfo->statistic->website ?? 0 }}
        </li>
        <li><span>{{ __('partner.address_clicks') }}: </span>{{ $user->partnerInfo->statistic->address ?? 0 }}
        </li>
        <li><span>{{ __('partner.direct_requests') }}: </span>{{ $user->partnerInfo->statistic->direct ?? 0 }}
        </li>
        <?php $networks = ['Facebook', 'Twitter', 'Instagram', 'Linkedin', 'Vimeo', 'Youtube']; ?>
        @foreach ($networks as $network)
                <?php $lc = strtolower($network); ?>
            <li><span>{{ $network }}: </span>{{ $user->partnerInfo->statistic->$lc ?? 0 }}</li>
        @endforeach
    </ul>
</div>
