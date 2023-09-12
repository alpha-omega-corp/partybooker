<div class="btn-group dropstart" data-url="{{ $partners->url($partners->currentPage()) }}">
    <button type="button" class="btn btn-labeled btn-success text-uppercase" data-bs-toggle="dropdown"
        data-bs-display="static" aria-expanded="false">
        <span class="btn-label">
            <i class="bi bi-cash-coin"></i>
        </span>
        <span class="btn-text">
            @if (\Request::get('budget'))
                {{ in_array(\Request::get('budget'), array_keys(\App\Helpers\BudgetsHelper::$_budgets)) ? \App\Helpers\BudgetsHelper::$_budgets[\Request::get('budget')] : __('partner.budget') }}
            @else
                {{ __('partner.budget') }}
            @endif
        </span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
        <a class="dropdown-item" data-value="0" href="{{ $partners->url(1) . '&budget=0' }}">&nbsp;</a>
        @foreach (\App\Helpers\BudgetsHelper::$_budgets as $k => $v)
            <li>
                <a class="dropdown-item" data-value="{{ $k }}"
                    href="{{ $partners->url(1) . '&budget=' . $k }}">
                    {{ $v }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
