<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAppContactsRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'instagram' => 'nullable|string',
            'x' => 'nullable|string',
        ];
    }
}
