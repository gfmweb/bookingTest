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
}
