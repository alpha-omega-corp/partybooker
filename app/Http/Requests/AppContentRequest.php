<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class AppContentRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'content_fr' => 'required|string',
            'content_en' => 'required|string',
        ];
    }
}
