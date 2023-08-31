@extends('main')

@section('page')
page="faqs"
@endsection

@section('title')
<title>{{__('main.faq_page_title')}} | {{ __('partybooker-cp.www')}}</title>
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
                <h1>{{__('main.faqs_page')}}</h1>
            </div>
        </div>
    </div>
    @include('common.social')
</section>

<section class="faq-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 offset-md-1">
                <h3 class="text-center">{{__('main.faq_page_title')}}</h3>
                <div class="accordion" id="accordionExample">
					<?php $i=1; ?>
					@foreach ($faqs as $faq)
						@if ($faq->relation == 0)
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
						@endif
					@endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@include('common.top-services')
@endsection
