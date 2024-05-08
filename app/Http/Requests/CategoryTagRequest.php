<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title_fr' => 'required',
            'title_en' => 'required',
            'slug_fr' => 'required',
            'slug_en' => 'required',
            'description_fr' => 'nullable|string',
            'description_en' => 'nullable|string',
            'keywords_fr' => 'nullable|array',
            'keywords_en' => 'nullable|array',
        ];
    }
}
