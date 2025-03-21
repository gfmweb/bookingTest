<?php

namespace App\Modules\Resources\Presentation\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateResourceRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255|exists:resource_types,name',
            'description' => 'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => __('resources::create_resource.validation.name.required'),
            'name.string' => __('resources::create_resource.validation.name.string'),
            'name.max' => __('resources::create_resource.validation.name.max'),
            'type.required' => __('resources::create_resource.validation.type.required'),
            'type.string' => __('resources::create_resource.validation.type.string'),
            'type.max' => __('resources::create_resource.validation.type.max'),
            'type.exists' => __('resources::create_resource.validation.type.exists'),
            'description.string' => __('resources::create_resource.validation.description.string'),
        ];
    }
}
