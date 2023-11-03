@php use App\Models\Advert; @endphp

<div class="profile-info">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            
        </div>
    </div>

    @if (Auth::user()->type == 'admin')
        <x-dashboard.card title="seo">
            <div class="seo">
                @include('web.partner.profile.seo')
            </div>
        </x-dashboard.card>
    @endif

    @include('web.partner.profile.vip')
    @include('web.partner.profile.event-types')




    @if (Auth::user()->type == 'admin')
        @include('web.partner.popup.edit-seo')
    @endif


    @if ($user->partnerInfo->vipPlan)
        @include('web.partner.popup.edit-vip')
    @endif
    @if ($user->partnerInfo->currentPlan && $user->partnerInfo->currentPlan->name == 'Exclusif')
        @include('web.partner.popup.edit-event-types')
    @endif
    @if (Auth::user()->type == 'admin')
        @include('web.partner.popup.edit-image')
    @endif
</div>

