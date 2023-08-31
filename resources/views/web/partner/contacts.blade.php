<div class="tab contact-section" tab="contacts" style="display: block">
	<div class="row justify-content-around">
        <div class="col-md-12 col-lg-6 our-contacts">
			<h3>{{__('partner.our_contacts')}}</h3>
            <a href="mailto:contact@partybooker.ch" class="email">{{$settings[0]->email}}</a>
            <a href="tel:{{$settings[0]->phone}}" class="phone">{{$settings[0]->phone}}</a>
            <a target="_blank" href="{{$settings[0]->facebook}}" class="facebook">{{$settings[0]->facebook}}</a>
            <a target="_blank" href="{{$settings[0]->linkedin}}" class="linkedin">{{$settings[0]->linkedin}}</a>
            <a target="_blank" href="{{$settings[0]->instagram}}" class="instagram">{{$settings[0]->instagram}}</a>
        </div>
        <div class="col-md-12 col-lg-6 write_form">
			<h3>{{__('partner.write_to_us')}}</h3>
            <form class="partner-form">
				<input type="text" name="name" placeholder="{{__('partner.name')}}" required>
                <input type="email" name="email" placeholder="{{__('partner.email')}}" required>
				<input type="text" name="partner_id" value="{{$user->id_partner}}" hidden>
                <textarea name="message" placeholder="{{__('partner.message')}}" required></textarea>
                <span class="agreement checkbox-item">
				<input type="checkbox" name="agreement" required />
				<span>{{__('partner.i_agree')}} <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/user-terms')}}" class="agree-term" target="_blank"> {{__('partner.use_terms')}}</a></span>
                </span>
                <button class="btn-orange">{{__('partner.send')}}</button>
			</form>
		</div>
	</div>
</div>
