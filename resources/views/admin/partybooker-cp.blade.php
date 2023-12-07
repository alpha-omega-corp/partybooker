@extends('admin.admin')

@section('page')
    page="main"
@endsection

@section('title')
    <title>{{ __('partybooker-cp.main')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div id="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ __('partybooker-cp.main')}}</h1>
                </div>
            </div>
            <div class="row qab">
                <div class="col-md-4">
                    <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/add-new-partner')}}"
                       class="btn btn-primary">Create Partner</a>
                </div>
                <div class="col-md-4">
                    <a href="{{url(App\Http\Middleware\LocaleMiddleware::getLocale().'/cp/blog/new-post')}}"
                       class="btn btn-primary">New Article</a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-primary" id="new-faq-btn">New Faq</a>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-md-6 messages-list">
                    <h3>{{ __('partybooker-cp.last_messages')}}</h3>
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
                                                            <div class="message unread"
                                                                 form-type="{{$message->contact_form}}"
                                                                 data-id="{{$message->id}}"
                                                                 data-date="{{$message->message_sent}}"
                                                                 data-type="{{ __('partybooker-cp.partner_form')}}"
                                                                 data-name="{{$message->name}}"
                                                                 data-email="{{$message->email}}"
                                                                 data-question="{{$message->message}}">
                                                                @else
                                                                    <div class="message"
                                                                         form-type="{{$message->contact_form}}"
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
                                                                        <div class="message unread"
                                                                             form-type="{{$message->contact_form}}"
                                                                             data-id="{{$message->id}}"
                                                                             data-date="{{$message->message_sent}}"
                                                                             data-type="{{ __('partybooker-cp.contacts_form')}}"
                                                                             data-name="{{$message->name}}"
                                                                             data-email="{{$message->email}}"
                                                                             data-message="{{$message->message}}">
                                                                            @else
                                                                                <div class="message"
                                                                                     form-type="{{$message->contact_form}}"
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
                                                                                    <div class="message unread"
                                                                                         form-type="{{$message->contact_form}}"
                                                                                         data-id="{{$message->id}}"
                                                                                         data-date="{{$message->message_sent}}"
                                                                                         data-type="{{ __('partybooker-cp.question_form')}}"
                                                                                         data-phone="{{$message->phone}}">
                                                                                        @else
                                                                                            <div class="message"
                                                                                                 form-type="{{$message->contact_form}}"
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
                                                                                    </div>
                                                                        </div>

                                                                        <div class="col-md-6 events">
                                                                            <h3>{{ __('partybooker-cp.notifications')}}</h3>
                                                                            @foreach ($notifications as $key=>$notification)
                                                                                @if ($notification->event === 'User registration')
                                                                                    <div
                                                                                        class="row notifications orange"
                                                                                        event-id="<?php echo $key ?>">
                                                                                        @elseif ($notification->event === 'Service provider registration')
                                                                                            <div
                                                                                                class="row notifications green"
                                                                                                event-id="<?php echo $key ?>">
                                                                                                @endif
                                                                                                <div class="col-md-12">
                                                                                                    <strong>{{$notification->event_date}}</strong>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-5">{{$notification->event}}</div>
                                                                                                <div
                                                                                                    class="col-md-7">{{$notification->description}}</div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                    </div>
                                                                        </div>
                                                            </div>
                                                </div>
    @include('admin.popups.new-faq')
    @include('admin.popups.message')
@endsection
