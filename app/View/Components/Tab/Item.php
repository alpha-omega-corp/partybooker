<?php

namespace App\View\Components\Tab;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    public function __construct(
        public ?string $title = null
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.tab.item');
    }
}
