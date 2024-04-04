@extends('main')

@section('page')
    page="contacts"
@endsection

@section('title')
    <title>{{__('main.contact_us')}} | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('service')

    <section class="contact-section">
        <div class="container">


            <div class="d-flex flex-column justify-content-center">

                <h1 class="text-uppercase text-center fw-bold pb-5">
                    {{__('main.contact_us')}}
                </h1>
            </div>

            <div class="container">
                <div class="d-flex justify-content-center">


                    <div class="contact-card shadow-lg">
                        <div class="d-flex justify-content-center">
                            <img src="{{Vite::image('contacts.svg')}}" alt="" width="100">
                        </div>
                        <hr>
                        <form class="contact-form">
                            <div class="input-group mb-3">
                                    <span class="input-group-text" id="contact-name">
                                        @svg('heroicon-o-user-circle')
                                    </span>
                                <input
                                    type="text"
                                    name="name"
                                    required
                                    class="form-control"
                                    placeholder="{{__('main.contacts_name')}}"
                                    aria-label="{{__('main.contacts_name')}}"
                                    aria-describedby="contact-name">
                            </div>

                            <div class="input-group mb-3">
                                    <span class="input-group-text" id="contact-email">
                                        @svg('heroicon-o-envelope')
                                    </span>
                                <input
                                    type="email"
                                    required
                                    name="email"
                                    class="form-control"
                                    placeholder="{{__('main.contacts_email')}}"
                                    aria-label="{{__('main.contacts_email')}}"
                                    aria-describedby="contact-email">
                            </div>


                            <div class="input-group mb-3">
                                    <span class="input-group-text" id="contact-message">
                                        @svg('heroicon-o-chat-bubble-bottom-center-text')
                                    </span>
                                <textarea name="message"
                                          class="form-control"
                                          placeholder="{{__('main.contacts_message')}}"
                                          aria-label="{{__('main.contacts_message')}}"
                                          aria-describedby="contact-message"></textarea>
                            </div>


                            <button class="btn btn-primary w-100">{{__('main.send')}}</button>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="mt-5">
                        <h3 class="fw-bold">
                            {{__('main.our_contacts')}}
                        </h3>
                        <hr>
                        <ul>
                            <li>
                                <a href="mailto:contact@partybooker.ch" class="email">
                                    {{$settings[0]->email}}
                                </a>
                            </li>

                            <li>
                                <a href="tel:{{$settings[0]->phone}}" class="phone">
                                    {{$settings[0]->phone}}
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
