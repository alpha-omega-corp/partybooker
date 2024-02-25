<?php

namespace App\View\Components\Notification;

use App\Enums\NotificationType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Popup extends Component
{
    public function __construct(
        public NotificationType $type,
        public string           $message,
    )
    {
        //
    }

    public function render(): View|Closure|string
    {
        return view('components.notification.popup');
    }
}
