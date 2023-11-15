@php use App\Http\Middleware\LocaleMiddleware; @endphp
@props([
    'partner'
])


@php
    $paymentMethod = auth()->user()->defaultPaymentMethod();
@endphp
<div class="credit-card-card">
    <p>
        {{ucfirst($paymentMethod->card->brand)}}
        {{ucfirst($paymentMethod->card->funding)}}

    </p>

    <span>
        {{$paymentMethod->card->exp_month}}/{{$paymentMethod->card->exp_year}}
    </span>

    {{$paymentMethod->card->last4}}
    {{$paymentMethod->card->network}}

</div>

<div class="active-plan">
    @if (Lang::has('plan.' . strtolower($partner->plan)))
        <div class="fw-bold text-start {{'text-' . strtolower($partner->plan)}}">
            {{ strtoupper(trans($partner->plan)) }}
        </div>
    @endif

    <table class="text-start">
        @foreach (auth()->user()->invoices() as $invoice)
            <tr>
                <td>@svg('heroicon-o-newspaper')</td>
                <td>{{ $invoice->id }}</td>
            </tr>

            <tr>
                <td>@svg('heroicon-o-calendar')</td>
                <td>{{ $invoice->date()->toFormattedDateString() }}</td>
            </tr>

            <tr>
                <td>@svg('heroicon-o-currency-dollar')</td>
                <td>{{ $invoice->total() }}</td>
            </tr>

            <tr>
                <td>@svg('heroicon-o-document-magnifying-glass')</td>
                <td>
                    <a href="{{ route('invoice', $invoice->id) }}">
                        Download invoice
                    </a>
                </td>
            </tr>

        @endforeach
    </table>
</div>
