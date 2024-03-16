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
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
            'x' => 'required',
        ];
    }
}
