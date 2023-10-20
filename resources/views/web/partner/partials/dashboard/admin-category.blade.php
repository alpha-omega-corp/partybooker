@if ($user->partnerInfo->currentPlan)
    <div class="col-md-3">
        <a href="#" data-toggle="modal" id="add-category-button" data-target="#add-category"
           class="button"
           data-id="{{ $user->partnerInfo->id }}">{{ __('partybooker-cp.add_sub_category') }}</a>
    </div>
@endif
