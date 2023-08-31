<div class="edit-seo popup popup-form popup-form-xl">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-seo')}}" method="POST">
			<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden />
	@endif
		@csrf
		<div class="close"></div>
                <style>
                    .edit-seo textarea {
                        width: 100%;
                        border: none;
                        -webkit-box-shadow: 0px 5px 10px 0px rgba(51, 51, 51, 0.1);
                        box-shadow: 0px 5px 10px 0px rgba(51, 51, 51, 0.1);
                        font-size: 15px;
                        font-family: "Baskerville";
                        color: #b4b4b4;
                        padding: 10px 20px;
                    }
                </style>
		<div class="form">

			<h3>Edit SEO</h3>
			
			<input type="text" name="en_seo_title" placeholder="EN Title" value="{{$user->partnerInfo->en_seo_title ?? $user->partnerInfo->en_company_name}}" />
			<input type="text" name="fr_seo_title" placeholder="FR Title" value="{{$user->partnerInfo->fr_seo_title ?? $user->partnerInfo->fr_company_name}}" />
                        <textarea name="en_seo_desc" placeholder="EN Description"  rows="5">{{trim(strip_tags($user->partnerInfo->en_seo_desc) ?? strip_tags($user->partnerInfo->en_full_descr))}}</textarea>
                        <textarea name="fr_seo_desc" placeholder="FR Description" rows="5">{{trim(strip_tags($user->partnerInfo->fr_seo_desc) ?? strip_tags($user->partnerInfo->fr_full_descr))}}</textarea>
                        <input type="text" name="en_seo_keywords" placeholder="EN Keywords" value="{{$user->partnerInfo->en_seo_keywords}}" />
			<input type="text" name="fr_seo_keywords" placeholder="FR Keywords" value="{{$user->partnerInfo->fr_seo_keywords}}" />
			
			<button type="submit" class="button">{{__('partner.save')}}</button>
		</div>
	</form>	
</div>
