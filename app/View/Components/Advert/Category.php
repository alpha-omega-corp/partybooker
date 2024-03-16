<?php

namespace App\View\Components\Advert;

use App\Models\Advert;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Category extends Component
{
    public function __construct(
        public Advert $advert
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.advert.category');
    }
}
