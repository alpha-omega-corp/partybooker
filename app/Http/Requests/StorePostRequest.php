<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::user()->isAdmin();
    }

    public function rules(): array
    {
        return [
            'slug' => 'required|string',
            'image' => 'required|file',
            'alt_fr' => 'required|string',
            'alt_en' => 'required|string',
            'title_fr' => 'required|string',
            'title_en' => 'required|string',
            'content_fr' => 'required|string',
            'content_en' => 'required|string',
            'status' => 'required|boolean',
        ];
    }
}
