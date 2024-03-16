<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class FaqRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->isAdmin();
    }

    public function rules(): array
    {
        return [
            'question_fr' => 'required|string',
            'question_en' => 'required|string',
            'answer_fr' => 'required|string',
            'answer_en' => 'required|string',
        ];
    }
}
