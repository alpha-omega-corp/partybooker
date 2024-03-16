<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait IsAdminRequest
{
    public function authorize(): bool
    {
        return Auth::user()->isAdmin();
    }
}
