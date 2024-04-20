<a href="{{route('locale', ['lang' => 'fr'])}}" @class([
    'app-locale-active' => app()->getLocale() === Language::FR->value,
])>
    <img src="{{ Vite::flag('france.png') }}"
         alt="Party Booker French"/>
</a>
<a href="{{route('locale', ['lang' => 'en'])}}" @class([
    'app-locale-active' => app()->getLocale() === Language::EN->value,
])>
    <img src="{{ Vite::flag('uk.png') }}"
         alt="Party Booker English"/>
</a>

