<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class AppFormRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'label_fr' => 'string|required',
            'label_en' => 'string|required',
        ];
    }
}
