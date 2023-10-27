@if (Lang::has('plan.' . strtolower($user->partnerInfo->plan)))
    <div class="fw-bold {{'text-' . strtolower($user->partnerInfo->plan)}}">
        {{ strtoupper(trans($user->partnerInfo->plan)) }}
    </div>
@endif

<table>
    @foreach ($user->invoices() as $invoice)
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

