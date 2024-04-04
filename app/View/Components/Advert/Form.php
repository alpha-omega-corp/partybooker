<?php

namespace App\View\Components\Advert;

use App\Enums\FormType;
use App\Models\AdvertService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Form extends Component
{
    public Collection $items;

    public function __construct(
        public AdvertService $service,
        public FormType      $type,
    )
    {
        $this->items = $service->forms()->ofType($type)->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.advert.form');
    }
}
