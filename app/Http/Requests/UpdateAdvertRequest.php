<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdvertRequest extends FormRequest
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
            'description_fr' => 'required',
            'description_en' => 'required',
        ];
    }
}
