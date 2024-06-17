<?php

namespace App\View\Components\Modal;

use App\Enums\AppColor;
use App\Enums\ModalName;
use App\Enums\ModalType;
use App\Helpers\ModalHelper;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Open extends Component
{
    public string $id;
    public string $color;

    public function __construct(
        public ModalName  $name,
        public mixed      $iterator = 0,
        public ?AppColor  $customColor = null,
        public ?ModalType $type = null,
        public ?string    $icon = null,
        public ?string    $text = null,
        public ?string    $tooltip = null,
        public bool       $automatic = false,
        public bool       $absolute = false,
        public bool       $background = false,
        public bool       $singleton = false,
        public bool       $fit = false,
        public bool       $radius = true,
        public bool       $center = true,
        public bool       $rounded = false,

    )
    {
        $this->color = match ($this->type) {
            ModalType::CREATE => 'primary',
            ModalType::DELETE => 'danger',
            ModalType::UPDATE => 'info',
            default => 'blue',
        };

        $this->id = ModalHelper::getId($name, $type, $singleton, $iterator);
    }

    public function render(): View|Closure|string
    {
        return view('components.modal.open');
    }
}
