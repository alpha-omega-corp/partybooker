<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'description_fr' => 'required',
            'description_en' => 'required',
            'keywords_fr' => 'required|array',
            'keywords_en' => 'required|array',
        ];
    }
}
