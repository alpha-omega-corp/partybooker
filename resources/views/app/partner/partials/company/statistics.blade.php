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
    <div class="position-relative d-flex justify-content-end p-2 pt-0">
        <x-modal.index
            :name=" ModalName::PARTNER_COMPANY_STATS"
            :type="ModalType::UPDATE"
            :size="ModalSize::MD"
            :multipart="true"
            :background="false"
            :route="route('partner.company.statistics', ['company' => $partner->company])"
        >

            <x-slot:body>
                <x-forms.input
                    name="clicks"
                    label="Clicks"
                    :value="$statistic->clicks"
                />
                <x-forms.input
                    name="phone"
                    label="Phone"
                    :value="$statistic->phone"
                />
                <x-forms.input
                    name="email"
                    label="Email"
                    :value="$statistic->email"
                />
                <x-forms.input
                    name="website"
                    label="Website"
                    :value="$statistic->website"
                />
                <x-forms.input
                    name="instagram"
                    label="Instagram"
                    :value="$statistic->instagram"
                />
                <x-forms.input
                    name="facebook"
                    label="Facebook"
                    :value="$statistic->facebook"
                />
                <x-forms.input
                    name="twitter"
                    label="X"
                    :value="$statistic->twitter"
                />
                <x-forms.input
                    name="youtube"
                    label="Youtube"
                    :value="$statistic->youtube"
                />
                <x-forms.input
                    name="linkedin"
                    label="LinkedIn"
                    :value="$statistic->linkedin"
                />
            </x-slot:body>

        </x-modal.index>
    </div>

@endif

