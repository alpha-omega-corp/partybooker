<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-name">
                                @svg('heroicon-o-user-circle')
                            </span>
    <input
        type="text"
        name="name"
        required
        class="form-control"
        placeholder="{{ __('service.name') }}"
        aria-label="{{__('service.name')}}"
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
        placeholder="{{ __('service.email') }}"
        class="form-control"
        aria-label="{{ __('service.email') }}"
        aria-describedby="contact-email">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-phone">
                                @svg('heroicon-m-device-phone-mobile')
                            </span>
    <input
        type="text"
        required
        placeholder="{{ __('service.phone') }}"
        class="form-control"
        name="phone"
        aria-label="{{ __('service.phone') }}"
        aria-describedby="contact-phone">
</div>


<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-date_of_event">
                                @svg('heroicon-o-calendar-days')
                            </span>
    <input
        type="text"
        class="form-control"
        name="event_date"
        required
        placeholder="{{ __('service.date_of_event') }}"
        aria-label="{{ __('service.date_of_event') }}"
        onfocus="(this.type='date')" onblur="(this.type='text')"
        aria-describedby="contact-date_of_event">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-alternative_date">
                                @svg('heroicon-s-calendar')
                            </span>
    <input
        type="text"
        class="form-control"
        name="alternative_date"
        required
        placeholder="{{ __('service.alternative_date') }}"
        aria-label="{{  __('service.alternative_date') }}"
        onfocus="(this.type='date')" onblur="(this.type='text')"
        aria-describedby="contact-alternative_date">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-amount_of_participants">
                                @svg('heroicon-o-user-group')
                            </span>
    <input
        type="text"
        class="form-control"
        name="participant"
        required
        placeholder="{{ __('service.amount_of_participants') }}"
        aria-label="{{ __('service.amount_of_participants') }}"
        aria-describedby="contact-amount_of_participants">
</div>




