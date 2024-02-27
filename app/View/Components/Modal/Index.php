<?php

namespace App\View\Components\Modal;

use App\Enums\ModalName;
use App\Enums\ModalSize;
use App\Enums\ModalType;
use App\Helpers\ModalHelper;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    public string $color;
    public mixed $id;

    public function __construct(
        public ModalName $name,
        public ModalSize $size,
        public ModalType $type,
        public mixed     $iterator = 0,
        public bool      $singleton = false,
        public bool      $multipart = false,
        public bool      $absolute = false,
        public bool      $hidden = false,
        public ?string   $route = null,
        public ?string   $icon = null,
        public ?string   $title = null,
        public ?string   $text = null,
        public ?string   $tooltip = null,
    )
    {
        $this->color = match ($this->type) {
            ModalType::CREATE => 'primary',
            ModalType::DELETE => 'danger',
            ModalType::UPDATE => 'info',
            ModalType::READ => 'standard',
        };

        $this->id = ModalHelper::getId($name, $type, $singleton, $iterator);
    }

    public function render(): View
    {
        return view('components.modal.index');
    }
}
