<?php

namespace App\View\Components\Plan;

use App\Models\AppPlan;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{

    public function __construct(
        public AppPlan $plan
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.plan.card');
    }
}
