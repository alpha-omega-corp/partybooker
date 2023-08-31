@extends('admin.admin')

@section('page')
page="faq"
@endsection

@section('title')
<title>{{ __('partybooker-cp.faq')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
<div id="page">
	<div class="container">
		<div class="row">
			<div class="col-md-3 border-right">
				<div class="messages">
					<div class="success">{{ __('partybooker-cp.edit_success')}}</div>
					<div class="error">{{ __('partybooker-cp.edit_error')}}</div>
				</div>
				<div class="setting-nav faq-nav">
					<ul>
						<li><a href="#" faq-type="all" class="active">{{ __('partybooker-cp.all_faqs')}}</a></li>
						<li><a href="#" faq-type="general">{{ __('partybooker-cp.general_faqs')}}</a></li>
						<li><a href="#" faq-type="partner">{{ __('partybooker-cp.partners_faqs')}}</a></li>
					</ul>
				</div>
				<a href="#" class="button" id="new-faq-btn">{{ __('partybooker-cp.add_new_faq')}}</a>
			</div>
			
			<div class="col-md-9">	
				<h1>{{ __('partybooker-cp.faq')}}</h1>
				<div class="faqs-list">
					@foreach ($faq as $key=>$faq)
						@if ($faq->relation == 0)
							<div class="faq" faq-type="general" faq-id="{{ $faq->id }}">
						@else 
							<div class="faq" faq-type="partner" faq-id="{{ $faq->id }}">
						@endif
								<div class="edit"></div>
								<div class="del"></div>
							@if (app()->getLocale() == 'en')
								<div class="question q-en" lan="en" faq="{{ $faq->id }}">
									{{ $faq->question_en }}
								</div>
								<div class="answer a-en" lan="en" ans="{{ $faq->id }}">
									{{ $faq->answer_en }}
								</div>
								<div class="question q-fr hidden" lan="fr" faq="{{ $faq->id }}">
									{{ $faq->question_fr }}
								</div>
								<div class="answer a-fr hidden" lan="fr" ans="{{ $faq->id }}">
									{{ $faq->answer_fr }}
								</div>
							@else
								<div class="question q-en hidden" lan="en" faq="{{ $faq->id }}">
									{{ $faq->question_en }}
								
								</div>
								<div class="answer a-en hidden" lan="en" ans="{{ $faq->id }}">
									{{ $faq->answer_en }}
								</div>
								<div class="question q-fr" lan="fr" faq="{{ $faq->id }}">
									{{ $faq->question_fr }}
								</div>
								<div class="answer a-fr" lan="fr" ans="{{ $faq->id }}">
									{{ $faq->answer_fr }}
								</div>
							@endif
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.popups.new-faq')
@include('admin.popups.edit-faq')
@include('admin.popups.conf-del-faq')
@endsection
