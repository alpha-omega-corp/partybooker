<div class="partner-advert-meta">
    <x-tab.locale>
        <x-slot:french>
            @php($locale = $advert->ofLang(Language::FR)->first()->locale)
            @if($locale->keywords)
                <x-meta.keywords :data="$locale->keywords"/>
            @endif

        </x-slot:french>

        <x-slot:english>
            @php($locale = $advert->ofLang(Language::EN)->first()->locale)
            @if($locale->keywords)
                <x-meta.keywords :data="$locale->keywords"/>
            @endif
        </x-slot:english>
    </x-tab.locale>
</div>
