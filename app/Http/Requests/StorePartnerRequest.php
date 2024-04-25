<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePartnerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->exists();
    }

    public function rules(): array
    {
        return [
            'company' => 'required',
            'plan' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'language' => 'required',
        ];
    }
}
