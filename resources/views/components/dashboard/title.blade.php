@props([
    'user',
    'plans'
])
@if (Auth::user()->type == 'admin')

    <div class="d-flex flex-column align-items-start">
        <div>
            <h1 class="text-uppercase text-start fw-bold display-6 dashboard-title-text">
                {{$user->partnerInfo->fr_company_name}}
            </h1>
        </div>
        <div class="dashboard-plan-badge">
            <span class="badge text-bg-{{strtolower($user->partnerInfo->plan)}} text-white">
                {{__('plan.'.strtolower($user->partnerInfo->plan))}}
            </span>
            @if(\Illuminate\Support\Facades\Auth::user()->type === 'admin')
                <x-dashboard.modal
                    id="editPlanAdmin"
                    :title="__('partner.edit_plan')"
                    :button="__('partner.edit')"
                    :action="route('plan.update.admin', ['id_partner' => $user->id_partner])"
                    :hasFiles="true"
                    :has-button="true"
                    icon="heroicon-o-pencil"
                    size="modal-md"
                    method="POST">

                    <div class="d-flex justify-content-around">
                        @foreach($plans as $key => $plan)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="plan"
                                       value="{{strtolower($plan->name)}}"
                                       id="adminPlanEdit{{$key}}">
                                <label class="form-check-label text-{{strtolower($plan->name)}} text-uppercase fw-bold"
                                       for="adminPlanEdit{{$key}}">
                                    {{__('plan.'.strtolower($plan->name))}}
                                </label>
                            </div>

                            <input type="hidden" value="{{$user->id_partner}}" name="partnerId">

                        @endforeach
                    </div>
                </x-dashboard.modal>
            @endif

        </div>
    </div>

@else
    <h1 class="text-uppercase text-start p-3 fw-bold display-4">
        {{__('partner.dashboard')}}
    </h1>
@endif
