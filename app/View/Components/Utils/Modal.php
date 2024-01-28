<?php

namespace App\View\Components\Utils;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public string $formMethod = 'POST';
    public string $color = 'bg-orange';

    public array $colors = [
        'primary' => 'bg-blue-500',
        'secondary' => 'bg-gray-500',
        'success' => 'bg-green-500',
        'danger' => 'bg-red-500',
        'warning' => 'bg-yellow-500',
        'info' => 'bg-blue-500',
        'light' => 'bg-gray-100',
        'dark' => 'bg-gray-800',
    ];

    public function __construct(
        public string $type,
    )
    {

    }

    function method(string $method): void
    {
        $this->formMethod = $method;
        $this->color = $this->colors[$method];
    }

    public function render(): View|Closure|string
    {
        return view('components.utils.modal', [
            'type' => $this->type,
            'formMethod' => $this->formMethod,
            'color' => $this->color,
        ]);
    }
}
