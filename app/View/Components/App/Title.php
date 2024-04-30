<?php

namespace App\View\Components\App;

use App\Enums\AppColor;
use App\Enums\TitleSize;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public string $style;

    public function __construct(
        public TitleSize $size,
        public AppColor  $color,
        public string    $value,
        public bool      $padding = true,
        public bool      $background = true,
        public bool      $border = true,
    )
    {
        $this->style = 'app-title ' . ($padding ? 'app-title-padding ' : ' ') . 'text-' . $color->value;
    }

    public function render(): View|Closure|string
    {
        return view('components.app.title');
    }
}
