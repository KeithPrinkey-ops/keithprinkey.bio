<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
            'title' => ['required'],
            'slug' => ['required'],
            'excerpt' => ['required'],
            'body' => ['required'],
            'hero_image_path' => ['required'],
            'thumb_image_path' => ['required'],
            'views' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
