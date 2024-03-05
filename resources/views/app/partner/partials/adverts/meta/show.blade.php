<div class="partner-advert-meta">
    <x-tab.locale>
        <x-slot:french>
            @php($locale = $advert->ofLang(Language::FR)->first()->locale)
            <x-meta.keywords :data="$locale->keywords"/>

        </x-slot:french>

        <x-slot:english>
            @php($locale = $advert->ofLang(Language::EN)->first()->locale)
            <x-meta.keywords :data="$locale->keywords"/>

        </x-slot:english>
    </x-tab.locale>
</div>
