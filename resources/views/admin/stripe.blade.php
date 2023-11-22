@extends('admin.admin')

@section('page')
    page="stripe"
@endsection

@section('title')
    <title>Stripe | {{ __('partybooker-cp.www')}}</title>
@endsection

@section('content')

    <table>
        <thead class="text-uppercase text-accent">
        <th>Partners</th>
        <th>Plan</th>
        <th>Stripe ID</th>
        </thead>

        <tbody>
        @foreach($payedUsers as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->partnerInfo->plan}}</td>
                <td>{{$user->stripe_id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
