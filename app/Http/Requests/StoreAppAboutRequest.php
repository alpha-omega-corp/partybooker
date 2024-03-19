<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreAppAboutRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'image' => 'file|required',
        ];
    }
}
