<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon1">
                                @svg('heroicon-o-user-circle')
                            </span>
    <input
        type="text"
        name="name"
        required
        class="form-control"
        placeholder="{{ __('service.name') }}"
        aria-label="{{__('service.name')}}"
        aria-describedby="contact-addon1">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon2">
                                @svg('heroicon-o-envelope')
                            </span>
    <input
        type="email"
        required
        name="email"
        placeholder="{{ __('service.email') }}"
        class="form-control"
        aria-label="{{ __('service.email') }}"
        aria-describedby="contact-addon2">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon3">
                                @svg('heroicon-m-device-phone-mobile')
                            </span>
    <input
        type="text"
        required
        placeholder="{{ __('service.phone') }}"
        class="form-control"
        name="phone"
        aria-label="{{ __('service.phone') }}"
        aria-describedby="contact-addon3">
</div>


<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon4">
                                @svg('heroicon-o-clipboard-document-list')
                            </span>
    <input
        type="text"
        class="form-control"
        name="event"
        required
        placeholder="{{ __('service.type_of_event') }}"
        aria-label="{{ __('service.type_of_event') }}"
        aria-describedby="contact-addon4">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon5">
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
        aria-describedby="contact-addon5">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon6">
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
        aria-describedby="contact-addon6">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="contact-addon7">
                                @svg('heroicon-o-user-group')
                            </span>
    <input
        type="text"
        class="form-control"
        name="participant"
        required
        placeholder="{{ __('service.amount_of_participants') }}"
        aria-label="{{ __('service.amount_of_participants') }}"
        aria-describedby="contact-addon7">
</div>
