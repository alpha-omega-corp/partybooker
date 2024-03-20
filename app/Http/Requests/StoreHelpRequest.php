<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHelpRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'phone' => 'string|required',
        ];
    }
}
