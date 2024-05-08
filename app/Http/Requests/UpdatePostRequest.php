<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'thumbnail' => 'file|nullable',
            'slug_fr' => 'required|string',
            'slug_en' => 'required|string',
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'alt_fr' => 'required|string',
            'alt_en' => 'required|string',
            'content_fr' => 'required|string',
            'content_en' => 'required|string',
        ];
    }
}
