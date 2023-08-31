<a href="#" class="new-service button">{{__('partner.create_new_service')}}</a>

<!-- Modal -->
<div class="create-service edit-category  popup popup-form">
	@if (Auth::user()->type == 'admin')
		<form class="edit-category" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/create-advert')}}" method="POST">
			<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden/>
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/create-advert')}}" method="POST">
			<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
			@endif
			@csrf
			<div class="close"></div>
			<div class="form">
				<h3>Create new service</h3>
				<div class="option-1">
					<div class="categories">
						<label class="select">Option: </label>
						<select name="option" id="partner-options">

						</select>
					</div>

					<div class="categories cat">
						<label class="select">Category: </label>
						<select id="category" name="category">
						</select>
					</div>

					<div class="sub-list">

					</div>
				</div>

				<button type="submit" class="button">{{__('partner.choose')}}</button>
			</div>
@if(true)</form>@else(false)@endif
</div>
