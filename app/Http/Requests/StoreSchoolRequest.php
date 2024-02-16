<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
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
            'name'=>['required','string'],
            'address'=>['nullable','string'],
            'phone'=>['nullable','string'],
            'email'=>['nullable','string', 'email'],
            'website'=>['nullable','string'],
            'logo'=>['nullable','string'],
            'banner'=>['nullable','string'],
            'description'=>['nullable','string'],
        ];
    }
}
