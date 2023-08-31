<div class="edit-vip popup popup-form editdetails partnerdetails">
	@if (Auth::user()->type == 'admin')
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/edit-vip-plan')}}" method="POST" enctype="multipart/form-data">
		<input type="text" name="id_partner" value="{{$user->partnerInfo->id_partner}}" hidden/>
	@else
		<form class="login" action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/edit-vip-plan')}}" method="POST" enctype="multipart/form-data">
		<input type="text" name="id_partner" value="{{Auth::user()->id_partner}}" hidden/>
	@endif
		@csrf
		<div class="close"></div>
		<div class="form">
			<h3>{{__('partner.banner')}}</h3>

			<input type="text" name="plan" value="{{$user->partnerInfo->plan}}" hidden/>
			<input type="text" name="main_img" value="{{$user->partnerInfo->main_img}}" hidden/>
			<input type="text" name="imgNum" value="1" hidden/>

			<label>Website url:</label>
			<input name="website_url" value="{{$user->partnerInfo->vipPlan->website_url}}">

			<label>{{__('partner.categories')}} ({{$user->partnerInfo->vipPlan->categories_count}}):</label>
			<?php
				$temp = [];
				foreach ($user->partnerInfo->vipPlan->categories as $cat){
					$temp[] = $cat->category;
				}
			?>

			@for($i = 1; $i <= 6; $i++)
				<span class="checkbox-item">
					<input type="checkbox" id="cat_check" name="category[]" @if(in_array("cat{$i}", $temp)) checked @endif value="cat{{$i}}">
					<span>{{__("categories.cat{$i}")}}</span>
					<span class="checkmark"></span>
				</span>
			@endfor


			<label>{{__('partner.upload_banner')}}:</label>
			<div class="input-file-group">
				<input name="files" class="file input-file" type="file" aria-label="files" />
				<input type="text" class="form-control" disabled placeholder="{{__('partner.upload_file')}}">
				<button class="add-file button" type="button">{{__('partner.choose_file')}}</button>
			</div>

			<div id="mainimage"></div>

			<button type="submit" class="button img-limit">{{__('partner.save')}}</button>
		</div>
	@if (Auth::user()->type == 'admin')
		</form>
	@else
		</form>
	@endif
</div>


@push('footer')
	<script>
		$(document).ready(function() {
			$("#files").kendoUpload({"multiple": false});
		});

		var $ckb = $('input#cat_check'),
			$sel = $('.mySelectBox');

		function ckkk () {

			var ckd = $ckb.filter(":checked").length,
				max = parseInt('{{$user->partnerInfo->vipPlan->categories_count}}', 10);

			if(ckd > max)
				$ckb.prop({checked:false, disabled:false});
			else
				$ckb.not(":checked").prop({disabled: ckd >= max});
		}

		$ckb.on("change", ckkk);
	</script>
@endpush
