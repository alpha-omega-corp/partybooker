<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyLogoRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'logo' => 'file|required',
        ];
    }
}



