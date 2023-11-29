@php use App\Helpers\BudgetsHelper; @endphp
<div class="btn-group dropstart">
    <button type="button" class="btn btn-labeled btn-accent text-uppercase" data-bs-toggle="dropdown"
            data-bs-display="static" aria-expanded="false">
        <span class="btn-label">
            @svg('heroicon-o-banknotes')
        </span>
        <span class="btn-text">
            @if (Request::get('budget'))
                {{ in_array(Request::get('budget'), array_keys(BudgetsHelper::$_budgets)) ? BudgetsHelper::$_budgets[Request::get('budget')] : __('partner.budget') }}
            @else
                {{ __('partner.budget') }}
            @endif
        </span>
    </button>
    <ul class="dropdown-menu">
        @foreach (BudgetsHelper::$_budgets as $k => $v)
            <li class="dropdown-item p-2">
                <a data-value="{{ $k }}" href="{{ request()->url() . '&budget=' . $k }}" class="text-dark">
                    {{ $v }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
