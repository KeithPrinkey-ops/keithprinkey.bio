<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'company' => ['required'],
            'project_type' => ['required'],
            'budget_range' => ['required'],
            'decision_timeline' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
