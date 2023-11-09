<div class="d-flex flex-column">

    <div class="cp-socials-item">
        <h6 class="text-uppercase fw-bold">{{__('partner.url_website')}}</h6>
        <a href="{{$user->partnerInfo->www}}" target="_blank">
            {{$user->partnerInfo->www}}
        </a>
    </div>
    <hr>


    <div class="cp-socials-item">
        <img src="{{Vite::image('instagram.svg')}}" alt="Instagram">
        @if($user->partnerInfo->instagram)
            <a href="{{$user->partnerInfo->instagram}}" target="_blank">
                {{$user->partnerInfo->instagram}}
            </a>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('facebook.svg')}}" alt="Facebook">
        @if($user->partnerInfo->facebook)
            <a href="{{$user->partnerInfo->facebook}}" target="_blank">
                {{$user->partnerInfo->facebook}}
            </a>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('youtube.svg')}}" alt="Youtube">
        @if($user->partnerInfo->youtube)
            <a href="{{$user->partnerInfo->youtube}}" target="_blank">
                {{$user->partnerInfo->youtube}}
            </a>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('twitter.svg')}}" alt="Twitter">
        @if($user->partnerInfo->twitter)
            <a href="{{$user->partnerInfo->twitter}}" target="_blank">
                {{$user->partnerInfo->twitter}}
            </a>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('linkedin.svg')}}" alt="Linkedin">
        @if($user->partnerInfo->linkedin)
            <a href="{{$user->partnerInfo->linkedin}}" target="_blank">
                {{$user->partnerInfo->linkedin}}
            </a>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('vimeo.svg')}}" alt="Vimeo">
        @if($user->partnerInfo->vimeo)
            <a href="{{$user->partnerInfo->vimeo}}" target="_blank">
                {{$user->partnerInfo->vimeo}}
            </a>
        @else
            @svg('heroicon-o-no-symbol')
        @endif
    </div>
</div>

<hr>

@include('web.partner.popup.edit-www')

