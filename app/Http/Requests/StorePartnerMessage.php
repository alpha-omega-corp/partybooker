<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePartnerMessage extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->partnerInfo->exists();
    }

    public function rules(): array
    {
        return [
            'message' => 'required|string',
        ];
    }
}
