<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class InformationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->isAdmin();
    }

    public function rules(): array
    {
        return [
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'content_fr' => 'required|string',
            'content_en' => 'required|string',
        ];
    }
}
