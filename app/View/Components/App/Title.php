<?php

namespace App\View\Components\App;

use App\Enums\AppColor;
use App\Enums\TitleSize;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public function __construct(
        public TitleSize $size,
        public AppColor  $color,
        public string    $value,
        public bool      $background = false,
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.app.title');
    }
}
