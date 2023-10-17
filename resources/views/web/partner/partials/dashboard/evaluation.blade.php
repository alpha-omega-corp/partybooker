<div class="rating-stat">
    <ul class="stars">
        @for ($i = 1; $i <= 5; $i++)
            @if ($user->partnerInfo->average_rate >= $i)
                @include('common.star-selected')
            @else
                @include('common.star')
            @endif
        @endfor
        <li class="pointed">{{ __('partner.based_on') }} {{ $user->partnerInfo->votes }}
            {{ __('partner.rates') }}</li>
    </ul>

    <div class="rated">
        @for ($i = 5; $i > 0; $i--)
            <ul class="stars">
                @for ($j = 1; $j <= $i; $j++)
                    @include('web.common.star')
                @endfor
                <li class="pointed">
                    {{ isset($user->partnerInfo->rateGroup[$i]) ? $user->partnerInfo->rateGroup[$i] : 0 }}
                    {{ __('partner.rates') }}</li>
            </ul>
        @endfor
    </div>
</div>
