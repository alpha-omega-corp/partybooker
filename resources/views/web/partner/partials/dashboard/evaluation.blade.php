<div class="rating-stat">

    @if($user->partnerInfo->votes)
        <div class="rating-stat-average">
            <div class="d-flex align-items-center mt-1">
                <ul class="stars">
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($user->partnerInfo->average_rate >= $i)
                            @include('common.star-selected')
                        @else
                            @include('common.star')
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
        <hr>
    @endif

    <div class="rating-stat-votes">
        <div class="rated">
            @for ($i = 5; $i > 0; $i--)
                <ul class="stars">
                    @for ($j = 1; $j <= $i; $j++)
                        @svg('heroicon-m-star')
                    @endfor
                    <li class="pointed w-100">
                        <div class="d-flex justify-content-end">
                            <div>
                                <span class="fw-bold">
                                    {{ isset($user->partnerInfo->rateGroup[$i]) ? $user->partnerInfo->rateGroup[$i] : 0 }}
                                </span>
                                {{ __('partner.rates') }}
                            </div>
                        </div>
                    </li>
                </ul>
            @endfor
        </div>
    </div>


</div>
