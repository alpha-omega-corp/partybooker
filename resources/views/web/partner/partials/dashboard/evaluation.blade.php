<div class="rating-stat">
    <ul class="stars">
        @for ($i = 1; $i <= 5; $i++)
            @if ($user->partnerInfo->average_rate >= $i)
                @include('common.star-selected')
            @else
                @include('common.star')
            @endif
        @endfor

        <li class="pointed w-100">
            <div class="d-flex justify-content-end text-uppercase fw-bold">
                {{ __('partner.based_on') }}
                {{ $user->partnerInfo->votes }}
                {{ __('partner.rates') }}
            </div>
        </li>
    </ul>

    <hr>

    <div class="rated">
        @for ($i = 5; $i > 0; $i--)
            <ul class="stars">
                @for ($j = 1; $j <= $i; $j++)
                    @include('web.common.star')
                @endfor
                <li class="pointed w-100">
                    <div class="d-flex justify-content-end">
                        <div>{{ isset($user->partnerInfo->rateGroup[$i]) ? $user->partnerInfo->rateGroup[$i] : 0 }} {{ __('partner.rates') }}</div>
                    </div>
                </li>
            </ul>
        @endfor
    </div>
</div>
