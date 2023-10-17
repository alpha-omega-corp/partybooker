<div class="active-plan">
    <ul>
        <li>
            @if (is_null($user->partnerInfo->plan))
                N/A
            @else
                @if (Lang::has('plan.' . strtolower($user->partnerInfo->plan)))
                    {{ strtoupper(trans('plan.' . $user->partnerInfo->plan)) }}
                @else
                    {{ strtoupper($user->partnerInfo->plan) }}
                @endif
            @endif
        </li>
        <li>
            <span>{{ __('partner.payment') }}: </span>
            @if ($user->partnerInfo->payment_status == 0)
                N/A
            @else
                {{ __('partner.paid_on') }} {{ $user->partnerInfo->payed }}
            @endif
        </li>
        <li>
            <span>{{ __('partner.expire') }}: </span>
            @if (is_null($user->partnerInfo->expiration_date))
                N/A
            @else
                {{ $user->partnerInfo->expiration_date }}
            @endif
        </li>

        @if ($user->partnerInfo->payment_status == 0)
            <li class="topay"><a
                    href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . (Auth::user()->type == 'admin' ? '/cp' : '') . '/partner-cp/' . $user->id_partner . '/plans') }}"
                    class="button">{{ __('partner.make_payment') }}</a></li>
        @endif
    </ul>
</div>
