<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'slug' => ['required'],
            'description' => ['required'],
            'icon' => ['required'],
            'category' => ['required'],
            'features' => ['nullable'],
            'price_range' => ['nullable'],
            'active' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
