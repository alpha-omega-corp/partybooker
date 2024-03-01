<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdvertImageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_en' => 'required|string',
        ];
    }
}
