<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvertImageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'image' => 'required|file',
            'title_fr' => 'nullable|string',
            'title_en' => 'nullable|string',
            'description_fr' => 'nullable|string',
            'description_en' => 'nullable|string',
        ];
    }
}
