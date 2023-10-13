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
        aria-label="__('service.name')"
        aria-describedby="contact-addon1">
</div>

<input type="text" placeholder="{{ __('service.name') }}*"
       name="name"
       required>
<input type="email" placeholder="{{ __('service.email') }}*"
       name="email"
       required>
<input type="text" placeholder="{{ __('service.phone') }}*"
       name="phone"
       required>
<input placeholder="{{ __('service.date_of_event') }}" type="text"
       name="event_date"
       onfocus="(this.type='date')" onblur="(this.type='text')">
<input placeholder="{{ __('service.alternative_date') }}?"
       type="text"
       name="alternative_date" onfocus="(this.type='date')"
       onblur="(this.type='text')">
<input type="text"
       placeholder="{{ __('service.amount_of_participants') }}*"
       require
       name="participant" required>
<textarea placeholder="{{ __('service.message') }}"
          name="message"></textarea>
