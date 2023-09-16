<div class="social-links fixed">
    @if (isset($settings))
        @if ($settings[0]->facebook)
            <a href="{{ $settings[0]->facebook }}" target="_blank"><i class="icon-facebook"></i></a>
        @endif
        @if ($settings[0]->linkedin)
            <a href="{{ $settings[0]->linkedin }}" target="_blank"><i class="icon-linkedin"></i></a>
        @endif
        @if ($settings[0]->instagram)
            <a href="{{ $settings[0]->instagram }}" target="_blank"><i class="icon-instagram "></i></a>
        @endif
        @if ($settings[0]->googleplus)
            <a href="{{ $settings[0]->googleplus }}" target="_blank"><i class="icon-googleplus "></i></a>
        @endif
        @if ($settings[0]->twitter)
            <a href="{{ $settings[0]->twitter }}" target="_blank"><i class="icon-twitter "></i></a>
        @endif
    @endif
</div>
