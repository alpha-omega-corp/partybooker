<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreAppAboutItemRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'content_fr' => 'string|required',
            'content_en' => 'string|required',
        ];
    }
}
