<div class="active-plan">
    <ul>
        <li>
            @if (is_null($user->partnerInfo->plan))
                @if ($user->partnerInfo->payment_status == 0)
                    <a
                        href="{{ url(App\Http\Middleware\LocaleMiddleware::getLocale() . (Auth::user()->type == 'admin' ? '/cp' : '') . '/partner-cp/' . $user->id_partner . '/plans') }}"
                        class="button topay">
                        {{ __('partner.make_payment') }}
                    </a>

                @else
                    @svg('heroicon-o-no-symbol')

                @endif

            @else
                @if (Lang::has('plan.' . strtolower($user->partnerInfo->plan)))
                    <div class="fw-bold {{'text-' . strtolower($user->partnerInfo->plan)}}">
                        {{ strtoupper(trans('plan.' . $user->partnerInfo->plan)) }}
                    </div>

                @else
                    {{ strtoupper($user->partnerInfo->plan) }}
                @endif
            @endif
            <hr>
        </li>
        <li>
            <span class="text-uppercase fw-bold">{{ __('partner.payment') }} </span>
            <br>
            @if ($user->partnerInfo->payment_status == 0)
                N/A
            @else
                {{ $user->partnerInfo->payed }}
            @endif
            <hr>
        </li>
        <li>

            <span class="text-uppercase fw-bold">{{ __('partner.expire') }}</span>
            <br>
            @if (is_null($user->partnerInfo->expiration_date))
                N/A
            @else
                {{ $user->partnerInfo->expiration_date }}
            @endif
            <hr>
        </li>


    </ul>
</div>
