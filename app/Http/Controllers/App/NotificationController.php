<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function status(Notification $notification)
    {
        $notification->update([
            'is_resolved' => !$notification->is_resolved
        ]);

        return back()->with('success', 'Notification status updated successfully');
    }
}
