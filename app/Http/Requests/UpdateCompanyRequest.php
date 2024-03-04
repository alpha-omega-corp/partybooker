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
            'email' => 'required|email',
            'phone' => 'required|string',
            'fax' => 'required|string',
        ];
    }
}
