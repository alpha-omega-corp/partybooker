<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnershipRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'email|required',
            'phone' => 'string|required',
            'plan' => 'required',
            'message' => 'nullable|string',
            'g-recaptcha-response' => 'required',
        ];
    }
}
