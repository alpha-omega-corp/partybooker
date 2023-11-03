@php use App\Http\Middleware\LocaleMiddleware; @endphp
@php use Illuminate\Support\Facades; @endphp

@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>Plans | {{ __('partybooker-cp.www')}}</title>
@endsection


@push('header')
    <script>
        function subscribe(plan, name) {
            document.getElementById('plan').value = plan
            document.getElementById('plan-name').value = name
            document.getElementById('add-card').click()
        }
    </script>
@endpush

@section('content')
    <x-dashboard.header/>

    <section class="mt-5">
        @if(!$user->subscribed('PartyBooker'))
            <x-partner.packages :plans="$plans"/>
        @else
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <x-dashboard.card :title="__('partner.plan_options')">
                        <div class="active-plan">
                            @include('web.partner.partials.dashboard.active-plan')
                        </div>
                    </x-dashboard.card>
                </div>


                <div class="col-lg-4 col-md-12">

                </div>
            </div>
        @endif


        <x-billing.payment-intent :intent="$intent"/>

    </section>
@endsection



