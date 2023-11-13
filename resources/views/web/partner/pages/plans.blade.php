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
        <div class="p-4">
            <x-partner.packages :plans="$plans"/>
        </div>
       
        <x-billing.payment-intent :intent="$intent"/>

    </section>
@endsection



