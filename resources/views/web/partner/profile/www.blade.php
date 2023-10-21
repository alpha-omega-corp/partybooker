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
        <a href="{{$user->partnerInfo->instagram}}" target="_blank">
            {{$user->partnerInfo->instagram}}
        </a>
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('facebook.svg')}}" alt="Facebook">
        <a href="{{$user->partnerInfo->facebook}}" target="_blank">
            {{$user->partnerInfo->facebook}}
        </a>
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('youtube.svg')}}" alt="Youtube">
        <a href="{{$user->partnerInfo->youtube}}" target="_blank">
            {{$user->partnerInfo->youtube}}
        </a>
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('twitter.svg')}}" alt="Twitter">
        <a href="{{$user->partnerInfo->twitter}}" target="_blank">
            {{$user->partnerInfo->twitter}}
        </a>
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('linkedin.svg')}}" alt="Linkedin">
        <a href="{{$user->partnerInfo->linkedin}}" target="_blank">
            {{$user->partnerInfo->linkedin}}
        </a>
    </div>

    <div class="cp-socials-item">
        <img src="{{Vite::image('vimeo.svg')}}" alt="Vimeo">
        <a href="{{$user->partnerInfo->vimeo}}" target="_blank">
            {{$user->partnerInfo->vimeo}}
        </a>
    </div>
</div>
<hr>

@include('web.partner.popup.edit-www')

