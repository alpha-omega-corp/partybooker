<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHelpRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'phone' => 'string|required',
            'message' => 'string|required',
            'g-recaptcha-response' => 'required'
        ];
    }
}
