<div class="d-flex">
    @if ($settings[0]->facebook)
        <a href="{{ $settings[0]->facebook }}" target="_blank">
            <img src="{{Vite::image('facebook.svg')}}" alt="party-booker-facebook"/>
        </a>
    @endif
    @if ($settings[0]->linkedin)
        <a href="{{ $settings[0]->linkedin }}" target="_blank">
            <img src="{{Vite::image('linkedin.svg')}}" alt="party-booker-linkedin"/>
        </a>
    @endif
    @if ($settings[0]->instagram)
        <a href="{{ $settings[0]->instagram }}" target="_blank">
            <img src="{{Vite::image('instagram.svg')}}" alt="party-booker-instagram"/>
        </a>
    @endif
    @if ($settings[0]->googleplus)
        <a href="{{ $settings[0]->googleplus }}" target="_blank">
            <img src="{{Vite::image('google.svg')}}" alt="party-booker-google"/>
        </a>
    @endif
    @if ($settings[0]->twitter)
        <a href="{{ $settings[0]->twitter }}" target="_blank">
            <img src="{{Vite::image('twitter.svg')}}" alt="party-booker-twitter"/>
        </a>
    @endif


</div>
