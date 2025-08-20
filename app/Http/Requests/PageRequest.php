<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'subtitle' => ['required'],
            'summary' => ['required'],
            'meta_description' => ['required'],
            'og_image_path' => ['required'],
            'route_name' => ['required'],
            'external_url' => ['required'],
            'tech_stack' => ['required'],
            'features' => ['required'],
            'screenshots' => ['required'],
            'faqs' => ['required'],
            'order_column' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
