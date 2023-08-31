<div class="tab" tab="faq" style="display: block">
	<h2 class="text-center">{{__('partner.frequently_asked_question')}}</h2>
	<div class="accordion" id="accordionExample">
		<?php $i=1; ?>
		@foreach ($faqs as $faq)
			<div class="card">
				<div class="card-header" id="headingOne">
					<button class="btn btn-link" type="button" data-toggle="collapse"
						data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
						@if (app()->getLocale() == 'en')
							{{ $faq->question_en }}
						@else
							{{ $faq->question_fr }}
						@endif
					</button>
				</div>
				<div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="headingOne"
					data-parent="#accordionExample">
					<div class="card-body">
						@if (app()->getLocale() == 'en')
							{{ $faq->answer_en }}
						@else
							{{ $faq->answer_fr }}
						@endif
					</div>
				</div>
			</div>
			<?php $i++; ?>
		@endforeach
	</div>
</div>
