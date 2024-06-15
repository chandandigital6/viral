<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'heading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fe_1' => 'nullable|string|max:255',
            'fe_2' => 'nullable|string|max:255',
            'fe_3' => 'nullable|string|max:255',
            'founded' => 'nullable|string',
            'founded_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'g_success' => 'nullable|string',
            'g_success_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'founded_data_office' => 'nullable|string',
            'founded_data_office_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'international_award' => 'nullable|string',
            'international_award_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'i_data_date'=>'nullable',
            'i_data_title'=>'nullable',
            'f_date_date'=>'nullable',
            'f_data_title'=>'nullable',
            'g_date'=>'nullable',
            'g_title'=>'nullable',
            'founded_date'=>'nullable',
            'founded_title'=>'nullable',

        ];
    }
}
