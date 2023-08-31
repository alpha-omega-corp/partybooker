<div class="tab" style="display: block" >
	<div class="packages">
		@foreach ($plans as $plan)
			@if(\Auth::user()->type != 'admin' && in_array(strtolower($plan->name), ['basic', 'commission']))
				@continue
			@endif
			<div class="package {{$plan->name}}">
				<div class="title">{{__('plan.'. strtolower($plan->name))}}</div>
				<ul>
					<li>
						@foreach($plan->options ?? [] as $group => $options)

							@foreach($options as $option)
								{{$option->categories_count}} {{$option->categories_count > 1 ? 'categories' : 'category'}} {{$option->sub_categories_count}}
								{{$option->categories_count > 1 ? 'subcategories' : 'subcategory'}}
								@if(!$loop->last)
									and
								@endif
							@endforeach
							@if(!$loop->last)
								<br> or
							@endif

						@endforeach
					</li>

					<li>{{$plan->photos_num}} {{__('partner.photos')}}</li>
					@if ($plan->video == 1)
						<li>{{__('partner.video')}}</li>
					@endif
					@if ($plan->direct_request == 1)
						<li>{{__('partner.direct_request')}}</li>
					@endif
					<li>{{__('partner.site_langs')}}</li>
				</ul>
				<div class="price">
					@if($user->partnerInfo->discount)
						<span>CHF {{$plan->price * (1 - ($user->partnerInfo->discount / 100))}}</span></br>
					@else
						<span>CHF {{$plan->price}}</span></br>
					@endif
					{{__('partner.par_an')}}

					@if (Auth::user()->type == 'admin')
						@if(strtolower($plan->name) == 'commission')
							<button id="set-commission" type="submit" class="button" data-plan-name="{{__('plan.'.$plan->name)}}" data-plan-id="{{$plan->id}}" data-toggle="modal" data-target="#modal-commission">
								{{__('partner.set_commission')}}
							</button>
						@else
						<button id="plan-choose" type="submit" class="button" data-plan-name="{{__('plan.'.$plan->name)}}" data-plan-id="{{$plan->id}}" data-toggle="modal" data-target="#ModalCenter">
							{{__('partner.choose')}}
						</button>
						@endif
					@else
						<button id="plan-payment-choose" type="submit" class="button"
						        data-plan-name="{{__('plan.'.$plan->name)}}" data-plan-id="{{$plan->id}}" data-toggle="modal"
						        data-target="#ModalPayment">{{__('partner.choose')}}
						</button>
					@endif
					@if($user->partnerInfo->waiting_approve_plan == $plan->name)
						<p style="color: #000; text-align: center">{{__('partner.wait_approve')}}</p>
					@endif
					@if ($user->partnerInfo->plan == $plan->name)
						</br><span class="chosen">{{__('partner.your_plan')}}</span>
					@endif
				</div>
			</div>
		@endforeach

		@include('web.partner.partials.plan-vip')
	</div>
</div>


@push('header')
	<style>
		.tab-pane .button{
			font-size: 0.8rem;
			line-height: normal;
		}
	</style>
@endpush
@if (Auth::user()->type == 'admin')
	<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
	     aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="ModalCenterTitle"></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/change-plan')}}"
				      method="POST">
					@csrf
					<div class="modal-body">
						<input type="hidden" id="input-plan_id" name="plan_id" value="">
						<input type="hidden" id="input-partner_id" name="partner_id" value="{{$user->partnerInfo->id_partner}}">

						<label style="color: orange">{{__('partner.start_date')}}</label>
						<input type="date" value="start_date" name="start_date" id="start_date">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('partner.close')}}</button>
						<button type="submit" class="btn btn-primary">{{__('partner.update')}}</button>
					</div>
					@push('footer')
						<script>
							$(document).ready(function () {
								$("#start_date").attr('min', '0')
							});
						</script>
					@endpush
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-commission" tabindex="-1" role="dialog" aria-labelledby="modal-commission-title"
	     aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="modal-commission-title">{{__('partner.set_commission')}}</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/set-commission')}}"
				      method="POST">
					@csrf
					<div class="modal-body">
						<input type="hidden" id="input-partner_id" name="partner_id" value="{{$user->partnerInfo->id_partner}}">

						<label style="color: orange">{{__('partner.start_date')}}</label>
						<input type="date" value="start_date" name="start_date" id="start_date">
						<br/>
						<label style="color: orange">{{__('partner.commission_amount')}}</label>
						<input type="number" value="0" min="0" max="100" name="commission_amount" id="commission_amount">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('partner.close')}}</button>
						<button type="submit" class="btn btn-primary">{{__('partner.update')}}</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@else
	<div class="modal fade" id="ModalPayment" tabindex="-1" role="dialog" aria-labelledby="ModalTitle"
	     aria-hidden="true">
		<div class="custom-modal modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content popup-container">
				<div class="popup-body">
					<div class="modal-header">
						<h3 class="modal-title" id="ModalTitle"></h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="btn-block">
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
								     aria-orientation="vertical">
									<a class="nav-link active" id="v-pills-cash-tab" data-toggle="pill"
									   href="#v-pills-cash" role="tab" aria-controls="v-pills-cash"
									   aria-selected="true">{{__('partner.cash')}}</a>
									<a class="nav-link" id="v-pills-paypal-tab" data-toggle="pill"
									   href="#v-pills-paypal" role="tab" aria-controls="v-pills-paypal"
									   aria-selected="false">PayPal</a>
									<a class="nav-link" id="v-pills-card-tab" data-toggle="pill" href="#v-pills-card"
									   role="tab" aria-controls="v-pills-card" aria-selected="false">{{__('partner.credit_card')}}</a>
								</div>
							</div>
							<div class="col payment-block">
								<div class="tab-content" id="v-pills-tabContent">
									<div class="tab-pane fade show active" id="v-pills-cash" role="tabpanel"
									     aria-labelledby="v-pills-cash-tab">
										<form action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/payment/cash')}}"
										      method="POST">
											@csrf
											<input type="hidden" id="plan_id" name="plan_id" value="">
											<button type="submit" id="send-cash-request" class="button">{{__('partner.send_request')}}</button>
										</form>

									</div>
									<div class="tab-pane fade" id="v-pills-paypal" role="tabpanel"
									     aria-labelledby="v-pills-paypal-tab">
										<form action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/payment/paypal')}}"
										      method="POST">
											@csrf
											<input type="hidden" id="plan_id" name="plan_id" value="">
											<button type="submit" id="pay-paypal" class="button">{{__('partner.pay_with_pp')}}
											</button>
										</form>
									</div>
									<div class="tab-pane fade" id="v-pills-card" role="tabpanel" aria-labelledby="v-pills-card-tab">

										<div class="panel" style="color: black">
											<div class="panel-body">
												<!-- Display errors returned by createToken -->
												<div class="payment-status" style="color: red;"></div>

												<!-- Payment form -->
												<form action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/payment/card')}}"
												      method="POST" id="paymentFrm">
												@csrf
													<div class="card-block">
														<p style="text-align: left">{{__('plan.supported_credit_cards')}}: VISA, MasterCard, America Express, Discover, Diners Club, JCB, UnionPay</p>
														<br>
														<label>{{__('partner.CARD_NUMBER')}}</label>
														<input type="text" name="card_number" id="card_number" maxlength="16" placeholder="0000 0000 0000 0000" autocomplete="off" required="">
														<div class="d-flex flex-wrap">
															<div class="expiry-data-block">
																<label>{{__('partner.EXPIRY_DATE')}}</label>
																<input type="text" name="card_exp_month"  id="card_exp_month" maxlength="2" placeholder="MM" required="">
																<input type="text" name="card_exp_year" id="card_exp_year" maxlength="4" placeholder="YYYY" required="">
															</div>
															<div class="cvc-block">
																<label>{{__('partner.CVC_CODE')}}</label>
																<input type="text" name="card_cvc" id="card_cvc" maxlength="3" placeholder="CVC" autocomplete="off" required="">
															</div>
														</div>
													</div>

													<input type="hidden" id="card_plan_id" name="plan_id" value="">
													<button type="submit" class="button" id="payBtn">
														{{__('partner.submit_payment')}}
													</button>
													<p style="text-align: right; color: #b7b7b7">{{__('plan.payment_processing_by')}} Stripe</p>
												</form>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('partner.close')}}</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif


<!-- Stripe JavaScript library -->
<script src="https://js.stripe.com/v2/"></script>

<script>
	// Set your publishable key
	Stripe.setPublishableKey('{{env("STRIPE_PUBLIC_KEY")}}');
</script>
