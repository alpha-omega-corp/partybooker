@php use App\Http\Middleware\LocaleMiddleware; @endphp
@php use Illuminate\Support\Facades; @endphp

@extends('web.main')
@section('page')
    page="cp"
@endsection

@section('title')
    <title>CP | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')
    <div class="d-flex justify-content-between">
        @foreach($plans as $plan)
            @if(!in_array($plan->name, ['commission', 'basic']) )
                <div class="become-partner">
                    <div class="packages">
                        <x-partner.package :plan="$plan">

                            @switch($plan->name)
                                @case('standart')
                                    @include('partial.plans.standard')
                                    @break
                                @case('premium')
                                    @include('partial.plans.premium')
                                    @break
                                @case('exclusif')
                                    @include('partial.plans.exclusif')
                                    @break
                            @endswitch

                        </x-partner.package>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="paymentModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <x-billing.update-payment-method :intent="$intent"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
