<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class DeletePartnerRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'partner_id' => 'required',
        ];
    }
}
