<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvertRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'slug' => 'required|string',
            'category' => 'required|int',
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
        ];
    }
}
