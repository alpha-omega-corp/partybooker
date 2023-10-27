<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePaymentMethod extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->exists();
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'method' => 'required|string',
            'plan' => 'required|string',
        ];
    }
}
