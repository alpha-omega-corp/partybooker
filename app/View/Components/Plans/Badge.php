<?php

namespace App\View\Components\Plans;

use App\Models\Plan;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct(
        public Plan $plan
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.plans.badge');
    }
}
