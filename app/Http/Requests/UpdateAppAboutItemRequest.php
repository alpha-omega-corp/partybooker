<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAppAboutItemRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'service' => 'string|required',
        ];
    }
}
