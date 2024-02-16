<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'last_name' => ['required', 'string'],
            'first_name' => ['required', 'string'],
            'middle_name' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'birth_date' => ['nullable', 'date'],
            'gender' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
        ];
    }
}
