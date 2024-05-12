<div class="app-navigation-locale">
    <a href="{{route('locale', ['lang' => 'fr'])}}" @class([
    'app-locale-active' => app()->getLocale() === Language::FR->value,
])>
        <img src="{{ Vite::app('french.png') }}"
             alt="Party Booker French"/>
    </a>
    <a href="{{route('locale', ['lang' => 'en'])}}" @class([
    'app-locale-active' => app()->getLocale() === Language::EN->value,
])>
        <img src="{{ Vite::app('english.png') }}"
             alt="Party Booker English"/>
    </a>
</div>

