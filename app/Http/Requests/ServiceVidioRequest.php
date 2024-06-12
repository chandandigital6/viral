<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceVidioRequest extends FormRequest
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
            'url' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'sort_msg' => 'nullable|string',
            'f1_msg' => 'nullable|string|max:255',
            'f1_icon' => 'nullable|string|max:255',
            'f2_msg' => 'nullable|string|max:255',
            'f2_icon' => 'nullable|string|max:255',
            'f3_msg' => 'nullable|string|max:255',
            'f3_icon' => 'nullable|string|max:255',
            'service_id' => 'required|exists:services,id',
        ];
    }
}
