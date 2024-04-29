<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyDescriptionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'slogan_fr' => 'nullable|string',
            'slogan_en' => 'nullable|string',
            'description_fr' => 'nullable|string',
            'description_en' => 'nullable|string',
        ];
    }
}
