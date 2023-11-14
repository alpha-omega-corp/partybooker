<section class="contact-section mt-4">
    <div class="d-flex justify-content-center">
        <div class="contact-card">
            <div class="d-flex">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{Vite::image('contacts.svg')}}" alt="" width="120">
                </div>

                <div class="w-100">
                    <form method="POST"
                          action="{{route('partner-contact')}}">
                        @csrf
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

                        <button class="btn btn-accent w-100">
                            @svg('heroicon-o-arrow-right')
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <div class="d-flex justify-content-center">
        <div>
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
</section>
