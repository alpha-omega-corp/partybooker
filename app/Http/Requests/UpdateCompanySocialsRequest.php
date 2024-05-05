<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanySocialsRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'www' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'youtube' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ];
    }
}
