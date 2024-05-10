<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'phone' => 'required|string',
            'guests' => 'required|integer',
            'date' => 'required|date',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ];
    }
}
