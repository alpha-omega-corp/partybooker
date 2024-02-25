<?php

namespace App\View\Components\Modal;

use App\Enums\ModalName;
use App\Enums\ModalType;
use App\Helpers\ModalHelper;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Open extends Component
{
    public string $id;

    public function __construct(
        public ModalName $name,
        public ModalType $type,
        public bool      $singleton = false,
        public mixed     $index = null,
    )
    {
        $this->id = ModalHelper::getId($name, $type, $singleton, $index);
    }

    public function render(): View|Closure|string
    {
        return view('components.modal.open');
    }
}
