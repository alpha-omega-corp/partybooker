<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdatePlanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->isAdmin();
    }

    public function rules(): array
    {
        return [
            'name_fr' => 'required|string',
            'name_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_en' => 'required|string',
            'color' => 'required',
            'price' => 'required|integer',
            'upload_count' => 'required|integer',
            'advert_count' => 'required|integer',
            'tag_count' => 'required|integer',
        ];
    }
}
