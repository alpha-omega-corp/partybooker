@extends('admin.admin')

@section('page')
page="messages"
@endsection

@section('title')
<title>{{ __('partybooker-cp.messages')}} | {{ __('partybooker-cp.www')}}</title>
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
				<div class="setting-nav form-nav">
					<ul>
						<li><a href="#" form-type="all" class="active">{{ __('partybooker-cp.all_messages')}}</a></li>
						<li><a href="#" form-type="subscribe">{{ __('partybooker-cp.subscribe_form')}}</a></li>
						<li><a href="#" form-type="request">{{ __('partybooker-cp.request_form')}}</a></li>
						<li><a href="#" form-type="question">{{ __('partybooker-cp.question_form')}}</a></li>
						<li><a href="#" form-type="contacts">{{ __('partybooker-cp.contacts_form')}}</a></li>
						<li><a href="#" form-type="partner">{{ __('partybooker-cp.partner_form')}}</a></li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-9">	
				<h1>{{ __('partybooker-cp.messages')}}</h1>
				<div class="form-messages">
					@foreach ($messages as $key=>$message)
						@if ($message->contact_form == 'subscribe')
							@if ($message->status == 0)
								<div class="message unread" form-type="{{$message->contact_form}}" 
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}" 
								data-type="{{ __('partybooker-cp.subscribe_form')}}"
								data-email="{{$message->email}}">
							@else 
								<div class="message" form-type="{{$message->contact_form}}" 
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}" 
								data-type="{{ __('partybooker-cp.subscribe_form')}}"
								data-email="{{$message->email}}">
							@endif
								<ul>
									<li>{{$message->message_sent}}</li>
									<li>{{ __('partybooker-cp.subscribe_form')}}</li>
									<li>{{$message->email}}</li>
								</ul>
							</div>
						@endif
						@if ($message->contact_form == 'request')
							@if ($message->status == 0)
								<div class="message unread" form-type="{{$message->contact_form}}"
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.request_form')}}"
								data-name="{{$message->name}}"
								data-email="{{$message->email}}"
								data-emailto="{{$message->emailto}}"
								data-partnerid="{{$message->id_partner}}"
								data-phone="{{$message->phone}}"
								data-message="{{$message->message}}">
							@else
								<div class="message" form-type="{{$message->contact_form}}"
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.request_form')}}"
								data-name="{{$message->name}}"
								data-email="{{$message->email}}"
								data-emailto="{{$message->emailto}}"
								data-partnerid="{{$message->id_partner}}"
								data-phone="{{$message->phone}}"
								data-message="{{$message->message}}">
							@endif
								<ul>
									<li>{{$message->message_sent}}</li>
									<li>{{ __('partybooker-cp.request_form')}}</li>
									<li>{{$message->email}}</li>
								</ul>
							</div>
						@endif
						@if ($message->contact_form == 'partner')
							@if ($message->status == 0)
								<div class="message unread" form-type="{{$message->contact_form}}" 
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.partner_form')}}" 
								data-name="{{$message->name}}"
								data-email="{{$message->email}}"
								data-question="{{$message->message}}">
							@else 
								<div class="message" form-type="{{$message->contact_form}}" 
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.partner_form')}}" 
								data-name="{{$message->name}}"
								data-email="{{$message->email}}"
								data-question="{{$message->message}}">
							@endif
								<ul>
									<li>{{$message->message_sent}}</li>
									<li>{{ __('partybooker-cp.partner_form')}}</li>
									<li>{{$message->email}}</li>
								</ul>
							</div>
						@endif
						@if ($message->contact_form == 'contacts')
							@if ($message->status == 0)
								<div class="message unread" form-type="{{$message->contact_form}}"
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.contacts_form')}}" 
								data-name="{{$message->name}}"
								data-email="{{$message->email}}"
								data-message="{{$message->message}}">
							@else
								<div class="message" form-type="{{$message->contact_form}}"
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.contacts_form')}}" 
								data-name="{{$message->name}}"
								data-email="{{$message->email}}"
								data-message="{{$message->message}}">
							@endif
								<ul>
									<li>{{$message->message_sent}}</li>
									<li>{{ __('partybooker-cp.contacts_form')}}</li>
									<li>{{$message->email}}</li>
								</ul>
							</div>
						@endif
						@if ($message->contact_form == 'question')
							@if ($message->status == 0)
								<div class="message unread" form-type="{{$message->contact_form}}"
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.question_form')}}"
								data-phone="{{$message->phone}}">
							@else
								<div class="message" form-type="{{$message->contact_form}}"
								data-id="{{$message->id}}"
								data-date="{{$message->message_sent}}"
								data-type="{{ __('partybooker-cp.question_form')}}"
								data-phone="{{$message->phone}}">
							@endif
							<ul>
								<li>{{$message->message_sent}}</li>
								<li>{{ __('partybooker-cp.question_form')}}</li>
								<li>{{$message->phone}}</li>
							</ul>
						</div>
						@endif
					@endforeach
					<ul>
						<li>Date</li>
						<li>To partner</li>
						<li>From</li>
					</ul>
					@foreach($directMessages as $message)
                                            @if($message)
						<div class="message @if($message->status) unread @endif" form-type="request"
						     data-id="{{$message->id}}"
						     data-date="{{$message->created_at}}"
						     data-type="{{ __('partybooker-cp.request_form')}}"
						     data-type_code="request"
						     data-name="{{$message->client_name}}"
						     data-email="{{$message->client_email}}"
						     data-emailto="{{(isset($message->partner))?$message->partner->fr_company_name . ' / ' . $message->partner->en_company_name:''}}"
						     data-partnerid="{{(isset($message->partner))?$message->partner->id_partner:''}}"
{{--						     data-partnername="{{(isset($message->partner))?$message->partner->fr_company_name . ' / ' . $message->partner->en_company_name:''}}"--}}
						     data-phone="{{$message->client_phone}}"
						     data-message="{{$message->message}}">
							<ul>
								<li>{{$message->created_at}}</li>
{{--								<li>{{ __('partybooker-cp.request_form')}}</li>--}}
								<li>{{(isset($message->partner))?$message->fr_company_name . ' / ' . $message->partner->en_company_name:''}}</li>
								<li>{{$message->client_email}}</li>
							</ul>
						</div>
                                            @endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.popups.message')
@endsection
