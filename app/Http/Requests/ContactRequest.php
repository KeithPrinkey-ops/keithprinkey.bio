<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Permission\Models\Permission;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
       // Check if the user is a super admin
        return true; // Ensure form submission is authorized
    }

    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z\s\-]+$/'],
            'last_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z\s\-]+$/'],
            'company' => ['nullable', 'string', 'max:100'], // Company can be optional
            'email' => ['required', 'email', 'max:254'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required.',
            'first_name.regex' => 'First name can only contain letters, spaces, and dashes.',
            'last_name.required' => 'Last name is required.',
            'last_name.regex' => 'Last name can only contain letters, spaces, and dashes.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'subject.required' => 'Subject is required.',
            'message.required' => 'Message cannot be empty.',
            'message.max' => 'Message must be under 2000 characters.',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'first_name' => strip_tags($this->first_name),
            'last_name' => strip_tags($this->last_name),
            'company' => strip_tags($this->company),
            'email' => strip_tags($this->email),
            'subject' => strip_tags($this->subject),
            'message' => strip_tags($this->message),
        ]);
    }
}
