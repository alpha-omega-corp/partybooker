@extends('main')

@section('page')
page="contacts"
@endsection

@section('title')
<title>{{__('main.contact_us')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <section class="header not-full">
        @include('common.header-nav')
        <div class="cover abs">
            <img src="/images/home-header-bg.jpg" class="bg abs" alt="Partybooker sélectionne les meilleures idées d'événements, de lieux et de services de Suisse romande.">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1>{{__('main.contact_us')}}</h1>
                </div>
            </div>
        </div>
        @include('common.social')
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5 col-sm-8 our-contacts">
                    <h3>{{__('main.our_contacts')}}</h3>
                    <a href="mailto:contact@partybooker.ch" class="email">{{$settings[0]->email}}</a>
                    <a href="tel:{{$settings[0]->phone}}" class="phone">{{$settings[0]->phone}}</a>
                    <a target="_blank" href="{{$settings[0]->facebook}}"
                        class="facebook">{{$settings[0]->facebook}}</a>
                    <a target="_blank" href="{{$settings[0]->linkedin}}"
                        class="linkedin">{{$settings[0]->linkedin}}</a>
                    <a target="_blank" href="{{$settings[0]->instagram}}"
                        class="instagram">{{$settings[0]->instagram}}</a>
                    <img src="images/contacts.svg" alt="">
                </div>
                <div class="col-sm-8 col-md-5 col-lg-4 write_form">
                    <h3>{{__('main.write_us')}}</h3>
                    <form class="contact-form">
                        <input type="text" name="name" placeholder="{{__('main.contacts_name')}}" required>
                        <input type="email" name="email" placeholder="{{__('main.contacts_email')}}" required>
                        <textarea name="message" placeholder="{{__('main.contacts_message')}}" required></textarea>
                        <span class="agreement checkbox-item">
							<input type="checkbox" name="agreement" required />
							<span>{{__('main.contacts_agree')}} <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/user-terms')}}" class="agree-term" target="_blank">{{__('main.contacts_terms')}}</a></span>
                        </span>
                        <button class="btn-orange">{{__('main.send')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
