<?php

namespace App\Http\Requests;

use App\Traits\IsAdminRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyStatsRequest extends FormRequest
{
    use IsAdminRequest;

    public function rules(): array
    {
        return [
            'clicks' => 'required|integer',
            'email' => 'required|integer',
            'phone' => 'required|integer',
            'website' => 'required|integer',
            'instagram' => 'required|integer',
            'facebook' => 'required|integer',
            'twitter' => 'required|integer',
            'youtube' => 'required|integer',
            'linkedin' => 'required|integer',
        ];
    }
}
