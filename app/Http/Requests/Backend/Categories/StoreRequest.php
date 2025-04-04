<?php

namespace App\Http\Requests\Backend\Categories;

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
        'slug' => 'required|unique:categories,slug',
        'image'=>'nullable|image',
        'parent_id'=>'nullable',
        'en.title' => 'required|string|max:255',
        'en.content' => 'required|string',
        'ar.title' => 'nullable|string|max:255',
        'ar.content' => 'nullable|string',
        ];
    }
}
