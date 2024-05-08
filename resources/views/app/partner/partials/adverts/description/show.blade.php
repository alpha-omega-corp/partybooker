<div class="partner-advert-description">
    @if($advert->locale)
        <x-tab.locale>
            <x-slot:french>
                @php($locale = $advert->ofLang(Language::FR)->first()->locale)

                <h6>{{$locale->title}}</h6>
                {!! $locale->description !!}

            </x-slot:french>

            <x-slot:english>
                @php($locale = $advert->ofLang(Language::EN)->first()->locale)

                <h6>{{$locale->title}}</h6>
                {!! $locale->description !!}

            </x-slot:english>
        </x-tab.locale>
    @endif
</div>

