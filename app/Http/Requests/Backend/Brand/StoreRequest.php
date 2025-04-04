<?php

namespace App\Http\Requests\Backend\Brand;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'slug' => 'required|unique:brands,slug',
            'image'=>'nullable|image',
            'en.title' => 'required|string|max:255',
            'ar.title' => 'required|string|max:255',
        ];
    }
}
