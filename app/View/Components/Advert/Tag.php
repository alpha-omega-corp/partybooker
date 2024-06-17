<?php

namespace App\View\Components\Advert;

use App\Models\Category;
use App\Models\CategoryTag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tag extends Component
{
    public function __construct(
        public Category     $category,
        public ?CategoryTag $tag = null,
        public bool         $isActive = false
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.advert.tag');
    }
}
