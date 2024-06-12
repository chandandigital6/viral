<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceDetailRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'f1_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'f1_msg' => 'nullable|string|max:255',
            'f2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'f2_msg' => 'nullable|string|max:255',
            'f3_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'f3_msg' => 'nullable|string|max:255',
            'f4_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'f4_msg' => 'nullable|string|max:255',
            'f5_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'f5_msg' => 'nullable|string|max:255',
            'title_1' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'service_id' => 'required|exists:services,id'
        ];
    }
}
