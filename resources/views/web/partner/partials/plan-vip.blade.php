<div class="package vip">
	<div class="title">VIP</div>
	<ul>
		<li>{{__('partner.vip_info1')}}</li>
		<li>{{__('partner.vip_info2')}}</li>
	</ul>
	<div class="price">
		<span>CHF 95</span></br>{{__('plan.per_month')}}

		@if(!is_null($user->partnerInfo->vipPlan))
			<br/>
			<span class="chosen">{{__('partner.your_plan')}}</span>
		@endif

		<button id="plan-vip-choose" type="submit" class="button" data-toggle="modal" data-target="#vip-modal">
			@if(!is_null($user->partnerInfo->vipPlan))
				{{__('partner.change')}}
			@else
				{{__('partner.choose')}}
			@endif
		</button>
	</div>
</div>

<div class="modal fade" id="vip-modal" tabindex="-1" role="dialog" aria-labelledby="vip-modal-title"
     aria-hidden="true">
	<div class="custom-modal modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content popup-container">
			<div class="popup-body">
				<div class="modal-header">
					<h3 class="modal-title" id="ModalTitle">VIP</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-card-vip" role="tabpanel" aria-labelledby="v-pills-card-vip-tab">
									<div class="panel" style="color: black">
										<div class="panel-body">
											<!-- Display errors returned by createToken -->
											<div class="payment-status" style="color: red;"></div>

											<!-- Payment form -->

                                            @if(\Auth::user()->type == 'admin')
                                                <form action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/partner-cp/vip-plan-set')}}" method="POST">
                                            @else
											    <form action="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/partner-cp/vip-plan-payment/card')}}" method="POST" id="paymentFrm">
                                            @endif
											@csrf
												<div class="card-block">
                                                    <input type="hidden" name="partners_info_id" value="{{$user->partnerInfo->id_partner}}">
													<label>{{__('partner.start_date')}}</label>
													<input type="date" id="vip-start-date" name="start_date" required>

													<label>{{__('partner.end_date')}}</label>
													<input type="date" id="vip-end-date" name="end_date" required>

													<label>{{__('partner.count_of_categories')}}</label>
													<input type="number" id="cat-count" value="1" min="1" max="6" value="1" name="categories_count">

													<div class="messages">
														{{__('partner.month')}}: <span id="month-total">1</span>
														<br>
														{{__('partner.budget')}}: <span id="price-vip-total">95</span> CHF
													</div>

													<br/>
                                                    @if(\Auth::user()->type != 'admin')
														<p style="text-align: left">{{__('plan.supported_credit_cards')}}: VISA, MasterCard, America Express, Discover, Diners Club, JCB, UnionPay</p><br>
                                                        <label>{{__('partner.CARD_NUMBER')}}</label>
                                                        <input type="text" name="card_number" id="card_number" maxlength="16" placeholder="0000 0000 0000 0000" autocomplete="off" required="">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="expiry-data-block">
                                                                <label>{{__('partner.EXPIRY_DATE')}}</label>
                                                                <input type="text" name="card_exp_month" id="card_exp_month" maxlength="2" placeholder="MM" required="">
                                                                <input type="text" name="card_exp_year" id="card_exp_year" maxlength="4" placeholder="YYYY" required="">
                                                            </div>
                                                            <div class="cvc-block">
                                                                <label>{{__('partner.CVC_CODE')}}</label>
                                                                <input type="text" name="card_cvc" id="card_cvc" maxlength="3" placeholder="CVC" autocomplete="off" required="">
                                                            </div>
                                                        </div>
                                                    @endif
												</div>
												<button type="submit" class="button" id="payBtn">
                                                    @if(auth()->user()->type == 'admin')
                                                        {{__('partner.submit')}}
                                                    @else
														{{__('partner.submit_payment')}}
                                                    @endif
												</button>
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

@push('footer')
	<script>
		function parseDate(str) {
			return new Date(str);
		}

		function datediff(first, second) {
			return Math.round((second-first)/(1000*60*60*24));
		}

		$("#vip-start-date, #vip-end-date, #cat-count").change(function() {
			var start = $('#vip-start-date').val();
			var cat_count = parseInt($('#cat-count').val());
			var end = $('#vip-end-date').val();
			var monthes = 1;


			if(start == '' || end == ''){
				monthes = 1;
			}else {
				var s = parseDate(start);
				var e = parseDate(end);
				var days = datediff(s, e);

				if(days<0){
					alert("Select valid period");
					return false;
				}

				monthes = Math.floor(parseInt(days) / 30) ;
				monthes = monthes + 1;
			}

			var price = (95 + (cat_count - 1) * 25) * monthes;
			$("span#month-total").text(monthes);
			$("span#price-vip-total").text(price);
		});

		$(function(){
			$('[type="date"]').prop('min', function(){
				return new Date().toJSON().split('T')[0];
			});
		});
	</script>
@endpush
