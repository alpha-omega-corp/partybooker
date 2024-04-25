<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'logo' => 'file',
            'name' => 'required|string',
            'slug' => 'required|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'fax' => 'nullable|string',
            'slogan_fr' => 'nullable|string',
            'slogan_en' => 'nullable|string',
            'description_fr' => 'nullable|string',
            'description_en' => 'nullable|string',
        ];
    }
}
