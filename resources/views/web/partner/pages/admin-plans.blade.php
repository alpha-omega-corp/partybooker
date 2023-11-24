@php use App\Http\Middleware\LocaleMiddleware; @endphp
@php use Illuminate\Support\Carbon;use Illuminate\Support\Facades; @endphp

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

        function trialIntent(plan, name) {
            document.getElementById('trialPlan').value = plan
            document.getElementById('trialPlanName').value = name
            document.getElementById('switchPlan').value = name
        }

        function openSubscribe() {
            document.getElementById('add-card').click()
            document.getElementById('plan').value = document.getElementById('trialPlan').value
            document.getElementById('plan-name').value = document.getElementById('trialPlanName').value
        }
    </script>
@endpush



@section('content')
    <div class="p-5">
        <x-dashboard.header :user="$user"/>
    </div>

@endsection






