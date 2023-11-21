<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateImageAlt extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user() !== null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'imageId' => 'required|integer',
            'partnerId' => 'required|string',
            'alt_fr' => 'required|string|max:255',
            'alt_en' => 'required|string|max:255',
        ];
    }
}
