<div class="input-group mb-3">
                            <span class="input-group-text" id="commission-guest">
                                @svg('heroicon-o-user-circle')
                            </span>
    <input
        type="text"
        name="guests"
        required
        class="form-control"
        placeholder="{{__('service.guests_profile')}}"
        aria-label="{{__('service.guests_profile')}}"
        aria-describedby="commission-guest">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="commission-language">
                                @svg('heroicon-o-user-circle')
                            </span>
    <input
        type="text"
        name="language"
        required
        class="form-control"
        placeholder="{{__('service.language')}}"
        aria-label="{{__('service.language')}}"
        aria-describedby="commission-language">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="commission-zone">
                                @svg('heroicon-o-user-circle')
                            </span>
    <input
        type="text"
        name="zone"
        class="form-control"
        placeholder="{{__('service.geographic_zone')}}"
        aria-label="{{__('service.geographic_zone')}}"
        aria-describedby="commission-zone">
</div>

<div class="input-group mb-3">
                            <span class="input-group-text" id="commission-budget">
                                @svg('heroicon-o-user-circle')
                            </span>
    <input
        type="text"
        name="budget"
        class="form-control"
        placeholder="{{__('service.approximate_budget')}}"
        aria-label="{{__('service.approximate_budget')}}"
        aria-describedby="commission-budget">
</div>


<h6 class="commission-heading text-uppercase">{{__('service.want_book_catering')}}</h6>
<div class="commission-caterer">

    <div class="form-check">
        <input class="radio" type="radio" name="caterer" value="yes" id="caterer-yes" required>
        <label
            for="caterer-yes">{{__('service.yes')}}
        </label>
    </div>

    <div class="form-check">
        <input class="radio" type="radio" name="caterer" value="no" id="caterer-no">
        <label
            for="caterer-no">{{__('service.no')}}
        </label>
    </div>

    <div class="form-check">
        <input class="radio" type="radio" name="caterer" value="maybe" id="caterer-maybe">
        <label
            for="caterer-maybe">{{__('service.maybe')}}
        </label>
    </div>
</div>

