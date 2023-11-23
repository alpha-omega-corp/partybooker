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
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:255',
            'event' => 'required|string',
            'event-date' => 'required|date',
            'alternative-date' => 'required|date',
            'participants' => 'required|integer',
            'partner-info-id' => 'required|string',
            'message' => 'required|string|max:255',
            'g-recaptcha-response' => 'required',
        ];
    }
}
