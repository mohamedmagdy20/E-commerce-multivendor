<?php

namespace App\Http\Requests\Backend\Product;

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
            'en.title' => 'required|string|max:255',
            'en.content' => 'required|string',
            'ar.title' => 'nullable|string|max:255',
            'ar.content' => 'nullable|string',
            'slug' => 'required|unique:categories,slug',
            'price'=>'required',
            'image'=>'required|image',
            'category_id'=>'required|array',
            'color'=>'required|array',
            'size'=>'required|array',
            'stock'=>'required|array',
            'images'=>'array',
            'brand_id'=>'required',
            'vendor_id'=>'required'
        ];
    }
}
