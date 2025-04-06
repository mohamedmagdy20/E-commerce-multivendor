<?php

namespace App\Http\Requests\Backend\Vendor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'required|string',
            'email'=>'required|email|unique:vendors,email,'.$this->id,
            'password'=>'required|confirmed',
            'phone'=>'required|unique:vendors,phone,'.$this->id,
            'image'=>'nullable|image',
            'account'=>'nullable'
        ];
    }
}
