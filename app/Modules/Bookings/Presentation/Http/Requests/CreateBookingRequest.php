<?php

namespace App\Modules\Bookings\Presentation\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookingRequest extends FormRequest
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
            'user_id' => 'required|integer|exists:users,id',
            'resource_id' => 'required|integer|exists:resources,id',
            'start_time' => 'required|date|after_or_equal:now',
            'end_time' => 'required|date|after:start_date',
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
            'user_id.required' => __('create_booking::create_booking.validation.user_id.required'),
            'user_id.integer' => __('create_booking::create_booking.validation.user_id.integer'),
            'user_id.exists' => __('create_booking::create_booking.validation.user_id.exists'),
            'resource_id.required' => __('create_booking::create_booking.validation.resource_id.required'),
            'resource_id.integer' => __('create_booking::create_booking.validation.resource_id.integer'),
            'resource_id.exists' => __('create_booking::create_booking.validation.resource_id.exists'),
            'start_time.required' => __('create_booking::create_booking.validation.start_time.required'),
            'start_time.date' => __('create_booking::create_booking.validation.start_time.date'),
            'start_time.after_or_equal' => __('create_booking::create_booking.validation.start_time.after_or_equal'),
            'end_time.required' => __('create_booking::create_booking.validation.end_time.required'),
            'end_time.date' => __('create_booking::create_booking.validation.end_time.date'),
            'end_time.after' => __('create_booking::create_booking.validation.end_time.after'),
        ];
    }
}
