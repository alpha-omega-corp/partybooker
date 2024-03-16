<?php

namespace App\View\Components\Advert;

use App\Models\Advert;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public Advert $advert,
        public bool   $blank = false,
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.advert.link');
    }
}
