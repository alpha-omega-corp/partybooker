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
            'name' => 'string|required',
            'email' => 'email|required',
            'password' => 'string|required',
            'company' => 'string|required',
            'phone' => 'string|required',
            'g-recaptcha-response' => 'required'
        ];
    }
}
